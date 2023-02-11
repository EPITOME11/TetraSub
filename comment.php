<?php
// Update the details below with your MySQL details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tetra';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error
    exit('Failed to connect to database!');
}




// Below function will convert datetime to time elapsed string
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


// This function will populate the comments and comments replies using a loop
function show_comments($comments, $parent_id = -1) {
    $html = '';
    if ($parent_id != -1) {
        // If the comments are replies sort them by the "submit_date" column
        array_multisort(array_column($comments, 'date'), SORT_ASC, $comments);
    }
    // Iterate the comments using the foreach loop
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $parent_id) {
            // Add the comment to the $html variable
            $html .= '
            <div class="comment">
                <div class="col-sm-12">
                    <h3 class="name">' . htmlspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . time_elapsed_string($comment['date']) . '</span>
                </div>
                <p class="content">' . nl2br(htmlspecialchars($comment['content'], ENT_QUOTES)) . '</p>
                <a class="reply_comment_btn" href="#" data-comment-id="' . $comment['id'] . '">Reply</a>
                ' . show_write_comment_form($comment['id']) . '
                <div class="replies">
                ' . show_comments($comments, $comment['id']) . '
                </div>
            </div>
            ';
        }
    }
    return $html;
}



// This function is the template for the write comment form
function show_write_comment_form($parent_id = -1) {
    $html = '
    <div class="write_comment" data-comment-id="' . $parent_id . '">
        <form>
            <input name="parent_id" type="hidden" value="' . $parent_id . '">
            <input name="name" type="text" placeholder="Your Name" required>
            <textarea name="content" placeholder="Write your comment here..." required></textarea>
            <button type="submit">Submit Comment</button>
        </form>
    </div>
    ';
    return $html;
}




// Page ID needs to exist, this is used to determine which comments are for which page
if (isset($_GET['page_id'])) {
    // Check if the submitted form variables exist
    if (isset($_POST['name'], $_POST['content'])) {
        // POST variables exist, insert a new comment into the MySQL comments table (user submitted form)
        $stmt = $pdo->prepare('INSERT INTO commentum (page_id, parent_id, name, content, date) VALUES (?,?,?,?,NOW())');
        $stmt->execute([ $_GET['page_id'], $_POST['parent_id'], $_POST['name'], $_POST['content'] ]);
        exit('Your comment has been submitted!');
    }
    // Get all comments by the Page ID ordered by the submit date
    $stmt = $pdo->prepare('SELECT * FROM commentum WHERE page_id = ? ORDER BY date DESC');
    $stmt->execute([ $_GET['page_id'] ]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the total number of comments
    $stmt = $pdo->prepare('SELECT COUNT(*) AS total_comments FROM commentum WHERE page_id = ?');
    $stmt->execute([ $_GET['page_id'] ]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No page ID specified!');
}

?>
<!doctype html>
<html>
<head>
<style>
.comments .comment_header {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid dimgray;
    padding: 15px 0;
    margin-bottom: 10px;
    align-items: center;
}
.comments .comment_header .total {
    color: #777777;
    font-size: 20px;
	margin-left: 7px;
}
.comments .comment_header .write_comment_btn {
    margin: 0;
}
.comments .write_comment_btn, .comments .write_comment button {
    display: inline-block;
    background-color: #565656;
    color: #fff;
    text-decoration: none;
    margin: 10px 0 0 0;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    border: 0;
	
}
.comments .write_comment_btn:hover, .comments .write_comment button:hover {
    background-color: #636363;
}
.comments .write_comment {
    display: none;
    padding: 20px 0 10px 0;
	width: 50%;
	margin-left: 15px;
}
.comments .write_comment textarea {
    width: 100%;
    padding: 10px;
    border: 2px solid dimgray;
    border-radius: 5px;
    height: 150px;
    margin-top: 10px;
	
}
.comments .write_comment input {
    display: block;
    width: 250px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}
.comments .write_comment button {
    cursor: pointer;
}
.comments .comment {
    padding-top: 10px;
}
.comments .comment .name {
    display: inline;
    padding: 0 5px 3px 0;
    margin: 0;
    font-size: 20px;
    color: #555555;
	
	
}
.comments .comment .date {
    color: #888888;
    font-size: 16px;
}
.comments .comment .content {
    padding: 5px 0 5px 0;
	color: gray;
	background-color: white;
	margin-left: 10px;
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif";
}
.comments .comment .reply_comment_btn {
    display: inline-block;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 20px solid;
    color: gainsboro;
	background-color: dimgray;
	border-radius: 2px;
	margin-left: 10px;
}
.comments .comment .replies {
    padding-left: 30px;
}
	
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div class="comment_header">
    <span class="total"><?=$comments_info['total_comments']?> comments</span>
    <a href="#" class="write_comment_btn" data-comment-id="-1"><b><h5>Click to Comment</h5></b></a>
</div>

<?=show_write_comment_form()?>

<?=show_comments($comments)?>
</body>
</html>