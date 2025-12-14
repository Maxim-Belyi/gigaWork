<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ulitka");
?>

    <div class="content">
      <div class="logo"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-black.svg" alt=""/></div>
      <ul>
        <li><a href="/frontpage/">Главная страница</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="/reviews/">Отзывы	</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="./articles.html">Статьи</a></li>
      </ul>
      <ul>
        <li><a href="./typical.html">Статья</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="./collaboration.html">Сотрудничество	</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="/contacts/">Контакты</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="/about/">О компании</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="./image.html">Имиджевая</a></li>
      </ul>
      <hr/>
      <ul>
        <li><a href="404.php">404</a></li>
      </ul>
    </div>
    <style type="text/css">
      body {
      	background: #E0E0E04D
      }
      .content {
      	max-width: 1480px;
      	width: 100%;
      	margin-left: auto;
      	margin-right: auto;
      	padding: 60px 20px;
      	box-sizing: border-box;
      	font-family: Arial, sans-serif; 
      }
      
      .logo {
      	margin-bottom: 30px;
      }
      .content hr {
      	margin: 25px 0;
      	border: 0;
      	border-bottom: 1px solid #0009;
      }
      .content ul {
      	columns: 4;
      }
      @media screen and (max-width: 767px) {
      	.content ul {
      		columns: 1 !important
      	}	
      }
      
      .content ul li {
      	break-inside: avoid;
      }
      
      .content a {
      	color: #000;
      	text-decoration: none;
      }
      
      .content a:hover {
      	color: #2682C4;
      }
    </style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

