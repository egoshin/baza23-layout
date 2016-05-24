<?
    require_once "include/config.php.inc";
    require_once "include/define.php.inc";
    $namePage = "Главная";
    $title = SITE_TITLE." | ".$namePage;
    require_once "include/header.php";
?>

<!-- Отключение "хлебных крошек" на этой странице" -->
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#breadcrumbs').hide();
    });
</script>

<!-- Содержимое страницы -->
<div class="container">
    <div class="page-header">
        <h1><?=$namePage?></h1>
    </div>
    <p class="lead">
        Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML
        and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.
    </p>
    <p>
        Back to
        <a href="../sticky-footer">the default sticky footer</a> minus the navbar.
    </p>
</div>
<?require_once "include/footer.php";?>
