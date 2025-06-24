<?php 

switch($_GET['do'] ?? 'title') {
    case 'title':
?>
<h3 style='text-align:center;'>新增標題區圖片</h3>
<hr>
<form action="">
    <div>
        <label>標題區圖片：</label>
        <input type="file" name="img">
    </div>
    <div>
        <label>標題區替代文字：</label>
        <input type="text" name="text">
    </div>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>


<?php
        break;
    case 'ad':
        echo "ad";
        break;
    case 'mvim':
        $file = './backend/mvim.php';
        break;
    case 'image':
        $file = './backend/image.php';
        break;
    case 'total':
        $file = './backend/total.php';
        break;
    case 'bottom':
        $file = './backend/bottom.php';
        break;
    case 'news':
        $file = './backend/news.php';
        break;
    case 'admin':
        $file = './backend/admin.php';
        break;
    case 'menu':
        $file = './backend/menu.php';
        break;
    default:
        $file = './backend/title.php';
}

?>