
/*-------------------------------------------
旧st-kanri.phpより移動（ここから）
*/

/* Gutenberg オリジナルパレット */
	:root .has-original-color-a-color {
		color: #43a047;
	}
	:root .has-original-color-a-background-color {
		background-color: #43a047;
	}

	:root .has-original-color-b-color {
		color: #795548;
	}
	:root .has-original-color-b-background-color {
		background-color: #795548;
	}

	:root .has-original-color-c-color {
		color: #ec407a;
	}
	:root .has-original-color-c-background-color {
		background-color: #ec407a;
	}

	:root .has-original-color-d-color {
		color: #9e9d24;
	}
	:root .has-original-color-d-background-color {
		background-color: #9e9d24;
	}

/* マイカラー */
.st-mycolor {
	color: #FF9800;
	font-weight:bold;
}

.st-mymarker-s {
	background:linear-gradient(transparent 70%,#FFF9C4 0%);
	font-weight:bold;
	}

/* @keyframes アニメーション */
.st-key-slidedown {
	animation-name: StSlideDown; /* 上から下 */
	animation-duration: 2s;
}

.st-key-slice-up {
	animation-name: StSlideUp; /* 下から上 */
	animation-duration: 2s;
}

.st-key-righttuoleft {
	animation-name: StRightToLeft; /* 右から左 */
	animation-duration: 2s;
}

.st-key-righttuoleft {
	animation-name: StLeftToRight; /* 左から右 */
	animation-duration: 2s;
}

.st-key-fedein {
	animation-name: StFedeIn; /* フェードイン */
	animation-duration: 2s;
}

/* 上から下 */
@keyframes StSlideDown {
  0% {
      opacity: 0;
      transform: translateY(-50px);
  }
  100% {
      opacity: 1;
      transform: translateY(0);
  }
}

/* 下から上 */
@keyframes StSlideUp {
  0% {
      opacity: 0;
      transform: translateY(50px);
  }
  100% {
      opacity: 1;
      transform: translateY(0);
  }
}

/* 右から左 */
@keyframes StRightToLeft {
	0% {
		opacity: 0;
		transform: translateX(50px);
	}
	100% {
		opacity: 1;
		transform: translateX(0);
	}
}

/* 左から右 */
@keyframes StLeftToRight {
	0% {
		opacity: 0;
		transform: translateX(0);
	}
	100% {
		opacity: 1;
		transform: translateX(50px);
	}
}

/* フェードイン */
@keyframes StFedeIn {
  0% {
      opacity: 0;
  }
  100% {
      opacity: 1;
  }
}



	.entry-title:not(.st-css-no2),
	.post .entry-title:not(.st-css-no2) {
		margin-bottom:20px;
	}



	














	.slick-prev,
	.slick-next,
	.slick-prev:hover,
	.slick-prev:focus,
	.slick-next:hover,
	.slick-next:focus {
		background-color: #424242	}

/* 検索フォーム */
#s,
.s {
				font-size: 14px;
				padding-left: 10px;
				padding-top: 5px;
		padding-bottom: 5px;
		}

.st-custom-search-box-tpl-default .cs-text-input {
			padding-left: 10px !important;
		padding-right: 10px !important;
				padding-top: 5px !important;
		padding-bottom: 5px !important;
	}

input#s:-ms-input-placeholder,
input.s:-ms-input-placeholder {
				font-size: 14px !important;
	}

input#s::-ms-input-placeholder,
input.s::-ms-input-placeholder {
				font-size: 14px !important;
	}

input#s::placeholder,
input.s::placeholder {
				font-size: 14px !important;
	}

#searchform,
.st-custom-search-box-tpl-default .cs-text {
			border-color: #000000;
				border-width: 1px;
		
	}

input#searchsubmit {
			padding-right: calc( 50px + 10px);
		padding-left: 10px;
				padding-top: calc( 50px + 5px);
		padding-bottom: calc( 50px + 5px);
						font-size: 14px;
		}

/* カスタム検索ボタン */
.cs-search-button {
	
			padding-left: 10px;
		padding-right: 10px;
	
			padding-top: 10px;
		padding-bottom: 10px;
	
			border-radius: 5px;
	
			background-color: #f3f3f3;
	
			color: #424242;
	
			font-size: 14px;
	
	
	}











	.st-middle-menu .menu > li {
		width:50%;
	}
	.st-middle-menu .menu li a{
		font-size:90%;
	}









	.p-navi {
		display:none;
	}


		#headbox {
			padding: 10px!important;
		}




    main .post h2:not(.st-css-no) span.st-h-copy,
    main .post h3:not(.st-css-no) span.st-h-copy,
	main .h2modoki span.st-h-copy,
	main .h3modoki span.st-h-copy,
    main .entry-title:not(.st-css-no) span.st-h-copy,
    main .post .entry-title:not(.st-css-no) span.st-h-copy,
	main .h4modoki span.st-h-copy,
	main .post h4:not(.st-css-no):not(.st-matome):not(.rankh4):not(.post-card-title):not(#reply-title):not(.point) span.st-h-copy,
	main .h5modoki span.st-h-copy,
	main .post h5:not(.st-css-no):not(.st-matome):not(.rankh5):not(.post-card-title):not(#reply-title):not(.st-cardbox-t):not(.kanren-t):not(.popular-t):not(.post-card-title) span.st-h-copy {
		font-weight: normal!important;
	}

@media only screen and (max-width: 599px) {
	.st-header-flextitle {
		font-weight: 700;
    }
}

	.st-cardbox .clearfix dd h5:not(.st-css-no),
	.post .st-cardbox .clearfix dd h5:not(.st-css-no),
	#side .st-cardbox .clearfix dd h5:not(.st-css-no) {
		border-bottom:none;
	}


	/*サイドバーカテゴリ*/
	#side li.cat-item a::after {
		content: " \f105";
		font-family: FontAwesome;
		position: absolute;
		right: 10px;
	}

	#side li.cat-item a {
		position: relative;
		vertical-align: middle;
		width:100%;
		padding: 10px;
		box-sizing:border-box;
		border-bottom: 1px solid #e1e1e1;
		color:#1a1a1a;
		text-decoration:none;
		display:block;
	}

	#side li.cat-item.has-thumbnail a {
		/* サムネイルあり */
		display: flex;
	}

	#side li.cat-item a:hover {
		opacity:0.5;
	}

			#side li.cat-item a {
			border-bottom-color: ;
			color: ;
		}
	

	/*TOC+*/
	#toc_container {
    	margin: 0 auto 20px;
    	text-align: center;
	}

	#toc_container .toc_title {
		text-align:center;
		padding: 5px;
		font-weight:bold;
		position:relative;
 		display: inline-block;
		vertical-align: middle;
		border-bottom: 2px solid #333;
		margin-bottom: 5px;
	}

	#toc_container:not(.contracted) .toc_title {
		margin:0 auto 10px;
	}

	#toc_container .toc_title:before {
  		content: "\f0f6\00a0";
  		font-family: FontAwesome;
	}

	#toc_container .toc_title .toc_toggle {
		font-weight: normal;
		font-size:95%;
	}

	.post #toc_container ul,
	.post #toc_container ol {
		list-style: none;
		margin-bottom: 0;
	}

	.toc_number {
		font-weight:bold;
		margin-right:5px;
		color:#ccc;
	}

	#toc_container ul a {
		display: block;
		text-decoration: none;
		color: #000;
		padding-bottom:5px;
		border-bottom: 1px dotted #ccc;
	}

	#toc_container ul a:hover {
		opacity:0.5;
	}

	#toc_container .toc_list > li> li > a {
		margin-bottom:10px;
	}

	#toc_container .toc_list > li > a {
		border-bottom: none;
	}

	.post #toc_container ul ul {
		padding:  5px 0;
	}

	.post #toc_container ul ul ul {
		padding-left: 10px;
	}

	#toc_container li {
		font-weight:bold;
		margin-bottom: 5px;
		padding: 10px 0px;
		list-style-type:none;
		text-align: left;
		text-indent:-0.8em;
		padding-left:1em;
	}

	#toc_container > ul > li {
		font-size: 18px;
	}

	#toc_container li a:before {
  		font-family: FontAwesome;
  		content: "\f0da\00a0\00a0";
  		color: #333;
	}

	#toc_container li li a:before {
  		content: none;
	}

	#toc_container li li {
		text-align:left;
		font-weight:normal;
		list-style:decimal outside none;
		text-indent:0;
		padding: 5px 0;
	}

	#toc_container li li li{
		margin-bottom:0;
		padding:3px 0;
		list-style-type:none;
		text-indent:-0.8em;
		padding-left:1em;
	}

	#toc_container li li li a{
		border:none;
		margin-bottom:0;
		padding:0;
	}

	#toc_container li li li a:before {
  		font-family: FontAwesome;
  		content: "\f0da\00a0\00a0";
  		color: #9E9E9E;
	}

	/* 第一階層のみの場合 */
	#toc_container.only-toc ul {
		padding:20px;
	}

	#toc_container.only-toc li{
		padding:0;
		font-weight:normal;
	}

	#toc_container.only-toc li a:before{
		content: none;
	}

	#toc_container.only-toc li{
		list-style-type: decimal;
		border-bottom:dotted 1px #ccc;
	}

	#st_toc_container.only-toc:not(.st_toc_contracted) {
					padding: 20px;
			}

	/* オリジナル */
	.post #toc_container ol.st-original-toc > li {
		list-style: decimal;
		text-align:left;
		font-weight: normal;
		padding: 0;
		text-indent: 0;
	}
	#toc_container ol.st-original-toc > li a:before {
  		content: none;
	}


	#s-navi dt.trigger .op-menu {
		display: none;
	}



	/*スライドメニュー追加ボタン1*/
	#s-navi dt.trigger .acordion_extra_1 {
		order: 2;
		flex-grow: 0;
	}

	#s-navi dt.trigger .acordion_extra_1 a {
		text-decoration: none;
	}

	/*スライドメニュー追加ボタン2*/
	#s-navi dt.trigger .acordion_extra_2 {
		order: 3;
		flex-grow: 0;
	}

	#s-navi dt.trigger .acordion_extra_2 a {
		text-decoration: none;
	}

	


/*
旧st-kanri.phpより移動（ここまで）
-------------------------------------------*/

/*グループ1
------------------------------------------------------------*/


/* 一括カラー反映 */


input, textarea {
	color: #000;
}




/*偶数行のセル*/
.post table tr:nth-child(even) {
	background-color: #dcedf6;
}

/*縦一行目のセル*/
table thead + tbody tr:first-child td:first-child,
table tr td:first-child {
			}

/*横一行目のセル及びヘッダセル*/
table tr:first-child td,
table tr:first-child th {
			background-color: #e8e8e8;
				color: #000000;
		}

table thead + tbody tr:first-child td,
table thead + tbody tr:first-child th {
	background-color:transparent;
	color: inherit;
	font-weight: normal;
}

/* 会話レイアウト */












/* プロフィール */


/*こんな方におすすめ*/








/* 目次（TOC+） */

#st_toc_container,
#toc_container {
			background: #f7f7f7;
						border: 2px solid #d3d3d3;
				border-radius: 5px;
	}

#st_toc_container:not(.st_toc_contracted):not(.only-toc),
#toc_container:not(.contracted) { /* 表示状態 */
		padding:15px 20px;
}

#st_toc_container:not(.st_toc_contracted):not(.only-toc),
#toc_container:not(.contracted) { /* 表示状態 */
			padding:20px 30px;
	}

#st_toc_container.st_toc_contracted,
#toc_container.contracted { /* 非表示状態 */
			padding: 10px 20px;
	}

	/** 基本（目次色/リスト数字/アイコン） */
	#st_toc_container li a:before, /* 第一階層のアイコン */
	#st_toc_container li li li a:before, /* 第三階層のアイコン */
	#st_toc_container > ul > li { /* リストの数字 */
		color: #333333;
	}
	.post #st_toc_container .st_toc_title,
	.post #st_toc_container .st_toc_title a,
	.post #toc_container .toc_title,
	.post #toc_container .toc_title a {
		color: #333333;
		border-color: #333333;
	}

	.post #st_toc_container .st_toc_title,
	.post #st_toc_container .st_toc_title a,
	.post #toc_container .toc_title,
	.post #toc_container .toc_title a {
		color: #333333;
		border-color: #333333;
	}

	#st_toc_container ul li a:before,
	#toc_container ul li a:before {
  		color: #333333;
	}
	.post #st_toc_container .st-original-toc > li,
	.post #st_toc_container .st-original-toc > li a,
	#st_toc_container ul.st_toc_list + li,
	#st_toc_container ul.st_toc_list > li > a,
	#toc_container ul.st_toc_list > li > a {
  		color: #333333;
	}

		#st_toc_container ul ul li,
		#st_toc_container ul ul li a,
		#st_toc_container.only-toc ul ul li a,
		.post #st_toc_container .st-original-toc ul ul li,
		.post #st_toc_container .st-original-toc ul ul li a,
		#toc_container.only-toc ul ul li a,
		#toc_container ul ul li,
		#toc_container ul ul li a {
  		color: #333333;
	}








    #st_toc_container.st_toc_style_default li li li,
    #st_toc_container.st_toc_style_paper li li li,
    #toc_container li li li {
		text-indent:-0.8em;
		padding-left:1em;
	}






/*マル数字olタグ*/


.post ol.is-style-st-maruno li:before,
.post .maruno ol li:before {
			background: #3b5998;
				color:#ffffff;
	}

	/* 四角背景 */
	.post ol.is-style-st-no li:before,
	.post ul.is-style-st-no li:before,
	.post ol.is-style-st-no-border li:before,
	.post ul.is-style-st-no-border li:before,
	.st-list-no:not(.st-css-no) li:before {
		background-color: #3b5998;
	}

/*チェックulタグ*/


.post ul.is-style-st-maruck li:before,
.post .maruck ul li:before {
			background: #3b5998;
				color:#ffffff;
	}

	/* マル */
	ol.is-style-st-circle li:before,
	ol.is-style-st-circle-border li:before,
	ul.is-style-st-circle li:before,
	ul.is-style-st-circle-border li:before,
	.st-list-circle:not(.st-css-no) li:before {
		background-color: #3b5998;
	}

/*Webアイコン*/




	ol.is-style-st-square-checkbox li:before,
	ol.is-style-st-square-checkbox li:after,
	ol.is-style-st-check li:before,
	ol.is-style-st-check-border li:before,
	ol.is-style-st-check li:after,
	ol.is-style-st-check-border li:after,
	ul.is-style-st-square-checkbox li:before,
	ul.is-style-st-square-checkbox li:after,
	ul.is-style-st-check li:before,
	ul.is-style-st-check-border li:before,
	ul.is-style-st-check li:after,
	ul.is-style-st-check-border li:after,
	.st-blackboard.square-checkbox ul.st-blackboard-list:not(.st-css-no) li:before,
	.st-blackboard.square-checkbox ul li:after,
	.st-square-checkbox ul li:before,
	.st-square-checkbox ul li:after {
		font-size: 150%;
	}



	.post .usermark2.on-color:before,
	.post .fa-user:not(.st-css-no) {
		color: #eaeaea;
	}



/*サイト上部のボーダー色*/

/*ヘッダーの背景色*/


	
		#headbox-bg {
											background-color: #3b5998;
			
			
		}

	


/* header */

/*ヘッダー下からの背景色*/
#content-w {
      
	}



			/*メインコンテンツの背景色*/
		main {
			background: #ffffff!important;
		}
	
		

	header .sitename a, /*ブログタイトル*/
	nav li a /* メニュー */
	{
		color: #ffffff;
	}







/*キャプション */
	header h1,
	header .descr{
		color: #ffffff;
	}

	/* スライドメニューアイコン */
	#s-navi dt.trigger .op {
					background: #3b5998;
							color: #ffffff;
			}






/*アコーディオンメニュー内背景色*/
#s-navi dd.acordion_tree,
#s-navi dd.acordion_search {
	/* 背景画像 */
	
			background-color: #3b5998;
	}


/* オーバーレイ検索フォーム */
html.s-navi-search-overlay #s-navi dd.acordion_search {
	background-image: none;
	background-color: rgba(255,255,255,.98);
}

/*追加ボタン1*/
#s-navi dt.trigger .op-st {
			background: #3b5998;
				color: #ffffff;
	}

/*追加ボタン2*/
#s-navi dt.trigger .op-st2 {
			background: #3b5998;
				color: #ffffff;
	}


	@media only screen and (max-width: 959px) {
		#header-l {
			padding-top: 10px;
		}
	}



/*スマホフッターメニュー*/
#st-footermenubox a {
	color: #000;
}



	/* スマホメニュー文字 */
	.widget_st_categories_widget ul.st-ac-cat .cat-item a, /* STINGERカテゴリー */
	#s-navi dl.acordion .acordion_tree .st-ac-box .st-widgets-title,
	.acordion_tree ul.menu li a,
	.acordion_tree ul.menu li,
	html:not(.s-navi-search-overlay) #s-navi dd.acordion_search .acordion_search_content {
		color: #ffffff;
	}


	/* ガイドマップメニュー */
	
	
	
	
	

#side aside ul.st-box-btn li,
.st-box-btn li,
.post .st-box-btn li,
.post ul.st-box-btn li:last-child {
		}

.st-box-btn .fa,
.st-box-btn img {
			font-size: 300%;
	}




	.acordion_tree .st-ac-box .widget_categories ul.st-ac-cat li.cat-item a {
	  color:#ffffff;
	}



/* 背景ワイド */

.st-wide-background {
	margin-left: -15px;
	margin-right: -15px;
    padding: 20px 15px;
	margin-bottom: 20px;
}

@media only screen and (min-width: 600px) {
	.st-wide-background {
		margin-left: -30px;
		margin-right: -30px;
	    padding-left: 30px;
	    padding-right: 30px;
	}
}

@media print, screen and (min-width: 960px) {
	.st-wide-background {
					margin-left: -50px;
			margin-right: -50px;
		    padding-left: 50px;
		    padding-right: 50px;
		 	}
	/* 1カラム */
	.colum1 .st-wide-background {
		margin-left: -70px;
		margin-right: -70px;
	    padding-left: 70px;
	    padding-right: 70px;
	}
}

/* 背景ワイド -右寄せ */

.st-wide-background-right {
	margin-right: -15px;
    padding: 20px 15px;
	margin-bottom: 20px;
}

@media only screen and (min-width: 600px) {
	.st-wide-background-right {
		margin-right: -30px;
	    padding-right: 30px;
		padding-left: 20px;
	}
}

@media print, screen and (min-width: 960px) {
	.st-wide-background-right {
					margin-right: -50px;
		    padding-right: 50px;
			padding-left: 20px;
		 	}
	/* 1カラム */
	.colum1 .st-wide-background-right {
		margin-right: -70px;
	    padding-right: 70px;
		padding-left: 20px;
	}
}

/* 背景ワイド - 左寄せ */

.st-wide-background-left {
	margin-left: -15px;
    padding: 20px 15px;
	margin-bottom: 20px;
}

@media only screen and (min-width: 600px) {
	.st-wide-background-left {
		margin-left: -30px;
	    padding-left: 30px;
		padding-right: 20px;
	}
}

@media print, screen and (min-width: 960px) {
	.st-wide-background-left {
					margin-left: -50px;
		    padding-left: 50px;
			padding-right: 20px;
		 	}
	/* 1カラム */
	.colum1 .st-wide-background-left {
		margin-left: -70px;
	    padding-left: 70px;
		padding-right: 20px;
	}
}

.post .st-wide-background-left ol:last-child,
.post .st-wide-background-left ul:not(.toc_list):not(.st_toc_list):not(.children):not(.slick-dots):not(.st-pvm-nav-list):last-child,
.st-wide-background-left p:last-child,
.post .st-wide-background-right ol:last-child,
.post .st-wide-background-right ul:not(.toc_list):not(.st_toc_list):not(.children):not(.slick-dots):not(.st-pvm-nav-list):last-child,
.st-wide-background-right p:last-child,
.post .st-wide-background ol:last-child,
.post .st-wide-background ul:not(.toc_list):not(.st_toc_list):not(.children):not(.slick-dots):not(.st-pvm-nav-list):last-child,
.st-wide-background p:last-child {
	margin-bottom: 0;
}

/** 引用風 */
.st-wide-background-left.st-blockquote,
.st-wide-background-right.st-blockquote,
.st-wide-background.st-blockquote {
	position: relative;
	padding-top: 60px;
}

.st-wide-background-left.st-blockquote::before,
.st-wide-background-right.st-blockquote::before,
.st-wide-background.st-blockquote::before {
   	content: "\f10d";
  	font-family: FontAwesome;
	position: absolute;
	font-size: 150%;
	top: 20px;
	left:20px;
	color: #9E9E9E;
}

.st-wide-background-left,
.st-wide-background-right,
.st-wide-background {
	background: #fafafa;
}

/** ビジュアルエディタ用 */
.mce-content-body .st-wide-background-left,
.mce-content-body .st-wide-background-right,
.mce-content-body .st-wide-background {
	padding: 20px!important;
	margin-left: 0!important;
	margin-right: 0!important;
	background: #fafafa;
}

/*グループ2
------------------------------------------------------------*/
/* 投稿日時・ぱんくず・タグ */
#breadcrumb h1.entry-title,
#breadcrumb,
#breadcrumb div a,
div#breadcrumb a,
.blogbox p,
.tagst,
#breadcrumb ol li a,
#breadcrumb ol li h1,
#breadcrumb ol li,
.kanren:not(.st-cardbox) .clearfix dd .blog_info p,
.kanren:not(.st-cardbox) .clearfix dd .blog_info p a
{
	color: #616161;
}

/* 記事タイトル */



	.post .entry-title:not(.st-css-no) {
		margin-top: 10px;
	}


	.post .entry-title:not(.st-css-no) {
		position: relative;
		padding-left:0;
		padding-bottom: 10px;
		border-top:none;
		
						background-color:transparent;
	}

	.post .entry-title:not(.st-css-no)::after {
		position: absolute;
		bottom: -3px;
		left: 0;
		z-index: 2;
		content: '';
		width: 100%;
		height: 3px;
					background-color: #3b5998;
			}

	


/* h2 */





	.h2modoki:before,
	.post h2:not(.st-css-no):before {
		position: absolute;
		content: '';
		width: 6px;
		height: 100%;
				left: 0;
		bottom: 0;
	}

	.h2modoki,
	.post h2:not(.st-css-no) {
		position: relative;
		padding-left:20px;
		border: none;
					color: #ffffff;
				
		

					background-image: url("");
			background-color: #3b5998;
		
			}

	

/* h3 */




		.h3modoki:before,
		.post h3:not(.st-css-no):not(.st-matome):not(.rankh3):not(.post-card-title):not(#reply-title):before {
			position: absolute;
			content: '';
			width: 6px;
			height: 100%;
							background: #3b5998;
						left: 0;
			bottom: 0;
		}

		.h3modoki,
		.post h3:not(.st-css-no):not(.st-matome):not(.rankh3):not(.post-card-title):not(#reply-title) {
			position: relative;
			padding-left:20px;
			border: none;
						
			

							background-image: url("");
				background-color: #f7f7f7;
								}

	

/*h4*/

	
			.h4modoki,
		.post h4:not(.st-css-no):not(.st-matome):not(.rankh4):not(.point) {
													background-color: transparent;
			
			
							border-bottom : solid 1px #adadad;
			
			
			
					}

		
	
	

/* h5 */


	
			.h5modoki,
		.post h5:not(.st-css-no):not(.st-matome):not(.rankh5):not(.point):not(.st-cardbox-t):not(.popular-t):not(.kanren-t):not(.popular-t):not(.post-card-title) {
													background-color: transparent;
			
			
			
			
			
					}

		
	
	


	
	
		.post .st-matome:not(.st-css-no):not(.rankh4):not(.point) {
													background-color: transparent;
			
			
			
							padding-left:px!important;
			
			
					}
	

/* ウィジェットタイトル */

.post .st-widgets-title:not(.st-css-no),
#side .menu_underh2,
#side .st-widgets-title:not(.st-css-no) {
	font-weight:bold;
	margin-bottom: 10px;
}


	.post .st-widgets-title:not(.st-css-no),
	#side .menu_underh2,
    #side .st-widgets-title:not(.st-css-no) {
		position: relative;
		border-top:none;
		border-bottom: solid 3px ;
		
		                color: #3b5998;
                background-color:transparent;
	}
	.post .st-widgets-title:not(.st-css-no)::after,
	#side .menu_underh2::after,
    #side .st-widgets-title:not(.st-css-no)::after {
		position: absolute;
		bottom: -3px;
		left: 0;
		z-index: 3;
		content: '';
		width: 30%;
		height: 3px;
		                	background-color: #3b5998;
			}

	

.tagcloud a {
	
			border: none;
	
	}

/* NEWENTRY及び関連記事テキスト */
	.post h4.point,
	.n-entry-t {
		position: relative;
		background-color: transparent;
		margin-top: 41px;
		margin-bottom: 30px;
					border-bottom: solid 1px #222584;
			}

	.post h4.point {
		margin-top: 61px;
	}

	.post h4:not(.st-css-no):not(.rankh4) .point-in,
	.n-entry {
		padding: 5px 15px;
		max-width:80%;
		box-sizing:border-box;
		font-size:15px;
		font-weight:bold;
		position:absolute;
		bottom:0;
		left:0;
		top:auto;
					background-color: #222584;
		
					color: #ffffff;
			}

	.catname {
					background: #3b5998;
							color:#ffffff;
			}



	.post .st-catgroup a {
		color: #ffffff;
	}


/*グループ4
------------------------------------------------------------*/





/*タイムライン
------------------------------------------------------------*/





/*ステップ
------------------------------------------------------------*/
.st-step {
	 		color: #0f0f0f;
				background: #e3e3e3;
				border-radius:5px;
	}
	.st-step:before{
		border-top-color: #e3e3e3;
	}

.st-step-title {
			  		border-bottom:solid 2px #e3e3e3;
	}

	.st-step-box {
		bottom: 15px;
	}

/* ポイント
------------------------------------------------------------*/
	.st-point:before {
					color: #0f0f0f;
							background: #e3e3e3;
			}

/*ブログカード
------------------------------------------------------------*/
/* 枠線 */

/* ラベル */
.st-labelbox-label-text,
.st-cardbox-label-text {
			background: #f5bf08;
				color: #fff;
	}

.st-cardbox-label-text .fa {
	margin-right: 5px;
}

/* リボン */
.st-ribon-box {
	position: relative;
	margin-bottom: 20px;
}

.st-ribon-label {
	position: absolute;
	top: 0;
	left: 0;
}

.st-ribon-text {
	display: inline-block;
	position: relative;
	height: 30px;
	line-height: 30px;
	text-align: left;
	padding: 0 15px 0 18px;
	font-size: 12px;
	box-sizing: border-box;
	font-weight: bold;
			background: #f5bf08;
				color: #fff;
	}

.st-ribon-text:after {
	position: absolute;
	content: '';
	width: 0px;
	height: 0px;
	z-index: 1;
	top: 0;
	right: -15px;
	border-width: 15px;
	border-style: solid;
			border-color: #f5bf08 transparent #f5bf08 #f5bf08;
	}

	/*ブログカード風 - ラベル*/
	.st-cardbox {
		margin-bottom: 20px;
		position: relative;
	}

			.st-cardbox-label {
			position: absolute;
			top: -4px;
			left: -4px;
			width: 100px;
			height: 100px;
			overflow: hidden;
		}
	
	.st-cardbox-label-text {
		white-space: nowrap;
		display: inline-block;
		position: absolute;
		padding: 7px 0;
		top: 25px;
		width: 150px;
		text-align: center;
		font-size: 90%;
		line-height: 1.2;
		font-weight: bold;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
		z-index: 9999;
					left: -35px;
			-webkit-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			transform: rotate(-45deg);
			}


	/** サムネイル非表示 */
	.kanren.st-cardbox.st-no-thumbnail dt{
		display: none;
	}
	.kanren.st-cardbox.st-no-thumbnail dd {
		padding-left: 0;
	}


/*ラベルボックス（ショートコード）*/
.st-labelbox {
	padding: 0;
    margin-bottom: 20px;
    position: relative;
}

	.st-labelbox-label {
		position: absolute;
		top: -4px;
		left: -4px;
		width: 100px;
		height: 100px;
		overflow: hidden;
	}

.st-labelbox-label-text {
    white-space: nowrap;
    display: inline-block;
    position: absolute;
    padding: 7px 0;
    top: 25px;
    width: 150px;
    text-align: center;
    font-size: 90%;
    line-height: 1.2;
    font-weight: bold;
			left: -35px;
		-webkit-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		transform: rotate(-45deg);
	    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    z-index: 9999;
}


/*フリーボックスウィジェット
------------------------------------------------------------*/


/* エリア内テキスト */

/*メモボックス
------------------------------------------------------------*/

/*スライドボックス
------------------------------------------------------------*/

/*お知らせ
------------------------------------------------------------*/
/*お知らせバーの背景色*/
#topnews-box div.rss-bar {
			border: none;
	
	
	}

/*お知らせ日付の文字色*/
#topnews-box dt {
	color: ;
}

#topnews-box div dl dd a {
	color: ;
}

#topnews-box dd {
	border-bottom-color: ;
}

#topnews-box {
			background-color:transparent!important;
	}


/*追加カラー
------------------------------------------------------------*/

footer #sidebg li a:before,
#footer .footerlogo a, /* フッターロゴ */
#footer .footerlogo,
#footer .footer-description a, /* フッター説明 */
#footer .footer-description,
#footer .head-telno a, /* フッターの電話番号 */
#footer .head-telno, /* フッターの電話番号 */
#footer .widget_archive ul li, /* アーカイブ */
#footer .widget_archive ul li a,
#footer .widget_recent_entries ul li a, /* 最近の投稿 */
#footer .widget_recent_entries ul li,
#footer .widget_recent_comments li a, /* 最近のコメント */
#footer .widget_recent_comments li,
#footer .widget_categories ul li a, /* カテゴリ（デフォルト） */
#footer .widget_categories ul li,
#footer .rankh3:not(.st-css-no),
#footer .st_side_rankwidgets a, /* ランキングウィジェットタイトル */
#footer .rankwidgets-cont p, /* 説明 */
#footer .kanren dd a, /* 記事一覧タイトル */
#footer .kanren .st-excerpt p, /*  記事一覧説明 */
#footer .kanren .blog_info p, /*  記事一覧日付 */
footer .footer-l *,
footer .footer-l a,
#footer .menu-item a,
#footer .copyr,
#footer .copyr a,
#footer .copy,
#footer .copy a {
	color: #ffffff !important;
}
#footer .widget_recent_entries ul li,
#footer .widget_archive ul li {
	border-bottom: 1px dotted #ffffff;
}


#footer #newsin dt, /* お知らせ日時 */
#footer #newsin dd a, /* お知らせ日テキスト*/
#footer #newsin dd, /* お知らせ日ボーダー */
#footer .cat-item a,
#footer .tagcloud a {
			color: #ffffff;
		border-color: #ffffff;
	}

#footer .p-entry,
#footer .st-widgets-title {
			color: #ffffff;
		font-weight: bold;
}

	footer .footermenust li {
		border-right-color: #ffffff !important;
	}

/*フッター背景色*/

	#footer {
        max-width:100%;
						background-image: url("");
				background-color: #3b5998;
				}

	

/*任意の人気記事
------------------------------------------------------------*/

#content-w .post .p-entry, #side .p-entry, .home-post .p-entry {
			background: #222584;
			border-radius: 0 0 4px 0;
}

.pop-box, .nowhits .pop-box, .nowhits-eye .pop-box,
.st-eyecatch + .nowhits .pop-box {
			border-top-color: #222584;
		}

	#content-w .p-entry::after {
		border-bottom: 5px solid #222584;
		border-left: 5px solid #222584;
	}

.pop-box:not(.st-wpp-views-widgets),
#side aside .kanren.pop-box:not(.st-wpp-views-widgets) {
			padding: 20px 0 10px;
	}



	.poprank-no2, .poprank-no {
		display: none;
	}

/*WordPressPopularPosts連携*/

#st-magazine .st-wp-views, /*CARDs JET*/
#st-magazine .st-wp-views-limit, /*CARDs JET*/
.st-wppviews-label .wpp-views, /*Ex*/
.st-wppviews-label .wpp-views-limit, /*Ex*/
.st-wpp-views-widgets .st-wppviews-label .wpp-views {
		}

/*ウィジェット問合せボタン*/

.st-formbtn {
	
	
			background-color: transparent!important;
	}



/*ウィジェットオリジナルボタン*/

.st-originalbtn {
	
	
			background-color: transparent!important;
	}




/*ミドルメニュー
------------------------------------------------------------*/
	.st-middle-menu {
					background-color: #3b5998;
				}

.st-middle-menu .menu li a{
			color: #ffffff;
	}


	
		
	

/*サイドメニューウィジェット
------------------------------------------------------------*/
/*背景色*/
#sidebg {
			background: #dbdbdb;
		}

/*liタグの階層*/
#side aside .st-pagelists ul li:not(.sub-menu) {
			border-color: #8b9dc3;
	}

#side aside .st-pagelists ul .sub-menu li {
	border: none;
}

#side aside .st-pagelists ul li:last-child {
			border-bottom: 1px solid #8b9dc3;
	}

#side aside .st-pagelists ul .sub-menu li:first-child {
			border-top: 1px solid #8b9dc3;
	}

#side aside .st-pagelists ul li li:last-child {
	border: none;
}

#side aside .st-pagelists ul .sub-menu .sub-menu li {
	border: none;
}


#side aside .st-pagelists ul li a {
			color: #ffffff;
				background-image: url("");
		background-color: #3b5998;
	}

	#side aside .st-pagelists ul li a {
		font-weight:bold;
	}
	#side aside .st-pagelists ul li li a {
		font-weight:normal;
	}

	#side aside .st-pagelists ul li a {
		font-size:110%;
	}
	#side aside .st-pagelists ul li li a {
		font-size:100%;
	}


#side aside .st-pagelists .sub-menu a {
			border-bottom-color: #7a7a7a;
		color: #000000;
}

#side aside .st-pagelists .sub-menu .sub-menu li:last-child {
	border-bottom: 1px solid #7a7a7a;
}

#side aside .st-pagelists .sub-menu li .sub-menu a,
#side aside .st-pagelists .sub-menu li .sub-menu .sub-menu li a {
	color: #000000;
}

	#side aside .st-pagelists .sub-menu li .sub-menu a:hover,
	#side aside .st-pagelists .sub-menu li .sub-menu .sub-menu li a:hover,
	#side aside .st-pagelists .sub-menu a:hover {
		opacity:0.8;
		color: #000000;
	}




/*Webアイコン*/
	#side aside .st-pagelists ul li a:before {
					content: "\f138\00a0\00a0";
				font-family: FontAwesome;
									color:#ffffff;
					
	}
	#side aside .st-pagelists li li a:before {
		content: none;
	}

	#side aside .st-pagelists li li a:before {
		content: "\f105\00a0\00a0";
		font-family: FontAwesome;
					color:#000000;
			}

.wpcf7-submit {
			background: #3b5998;
				color: #ffffff;
	}

/*-------------------------------------
記事ごとのヘッダー（EX）
--------------------------------------*/

/* 記事情報を表示*/
#st-header-post-under-box.st-header-post-data {
	display: flex;
	flex-wrap: wrap;
			justify-content: flex-start;
		align-items: center;
}

#st-header-post-under-box.st-header-post-data .st-content-width {
			width: 100%;
		padding:15px;
	box-sizing: border-box;
}


/* ヘッダー画像上エリア */
#st-header-top-widgets-box .st-content-width {
	text-align:center;
	margin: 0 auto;
	padding:7px 10px;
	}

#st-header-top-widgets-box .st-content-width .st-marquee { /* マーキー */
	padding: 0;
}

#st-header-top-widgets-box {
		}

#st-header-top-widgets-box .st-content-width p {
	margin-bottom: 0;
}


#st-header-top-widgets-box .st-content-width a:hover {
	opacity: 0.7;
}

/* ヘッダー画像エリア */


/* ヘッダー画像エリア下ウィジェット */

/* ヘッダーカード */


/* メイン画像背景色 */


/*強制センタリング・中央寄せ
------------------------------------------------------------*/
	    
                .entry-content .h2modoki,
        .entry-content h2:not(.st-css-no),
        .colum1 .entry-content .h2modoki,
        .colum1 .entry-content h2:not(.st-css-no)
        {
                margin-left: -15px;
                margin-right: -15px;
									padding-left:15px;
					padding-right:15px;
				        }
    
        

/*目次
------------------------------------------------------------*/
/* 目次 */

/*media Queries タブレットサイズ（959px以下）
----------------------------------------------------*/
@media only screen and (max-width: 959px) {

	/*-------------------------------------------
	旧st-kanri.phpより移動（ここから）
	*/

	
			
	
	/*
	旧st-kanri.phpより移動（ここまで）
	-------------------------------------------*/

	/*-- ここまで --*/
}

/*media Queries タブレットサイズ以上
----------------------------------------------------*/
@media only screen and (min-width: 600px) {

    /*-------------------------------------------
    旧st-kanri.phpより移動（ここから）
    */

    
    
				
	
	
	
	
    
            /*TOC+*/
        #toc_container > ul > li {
            font-size: 21px;
        }
        
    /*
    旧st-kanri.phpより移動（ここまで）
    -------------------------------------------*/
	/* 目次 */
	#st_toc_container:not(.st_toc_contracted):not(.only-toc),
	#toc_container:not(.contracted) { /* 表示状態 */
					padding:20px 30px;
			}

	/*強制センタリング・中央寄せ
	------------------------------------------------------------*/
				
						.entry-content .h2modoki,
			.entry-content h2:not(.st-css-no)
			{
				margin-left: -30px;
				margin-right: -30px;
									padding-left:30px;
					padding-right:30px;
							}
			.colum1 .entry-content .h2modoki,
			.colum1 .entry-content h2:not(.st-css-no)
			{
				margin-left: -20px;
				margin-right: -20px;
									padding-left:20px;
					padding-right:20px;
							}

						
				
}

/*media Queries タブレットサイズ（600px～959px）のみで適応したいCSS -タブレットのみ
---------------------------------------------------------------------------------------------------*/
@media only screen and (min-width: 600px) and (max-width: 959px) {

	/*-------------------------------------------
	旧st-kanri.phpより移動（ここから）
	*/

    /*--------------------------------
    各フォント設定
    ---------------------------------*/

	/* ブログカード */
	.post dd h5.st-cardbox-t {
	    font-size: 18px;
	    line-height: 30px;
	}
	/* 記事一覧 */
	dd h3:not(.st-css-no2) a, /*TOPとアーカイブ*/
	.kanren .clearfix dd h5:not(.st-css-no2) a { /*関連記事*/
	    font-size: 18px;
	    line-height: 26px;
	}

    
    /*基本のフォントサイズ*/
    .post .entry-content p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn), /* テキスト */
    .post .entry-content .st-kaiwa-hukidashi, /* ふきだし */
    .post .entry-content .st-kaiwa-hukidashi2, /* ふきだし */
    .post .entry-content .yellowbox, /* 黄色ボックス */
    .post .entry-content .graybox, /* グレーボックス */
    .post .entry-content .redbox, /* 薄赤ボックス */
    .post .entry-content #topnews .clearfix dd p, /* 一覧文字 */
    .post .entry-content ul li, /* ulリスト */
    .post .entry-content ol li, /* olリスト */
	.post .entry-content #st_toc_container > ul > li, /* 目次用 */
    .post .entry-content #comments #respond, /* コメント */
    .post .entry-content #comments h4, /* コメントタイトル */
	.post .entry-content h5:not(.kanren-t):not(.popular-t):not(.st-cardbox-t), /* H5 */
	.post .entry-content h6 {
					}

	/* スライドの抜粋 */
	.post .entry-content .post-slide-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-card-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .kanren:not(.st-cardbox) .clearfix dd p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn){
					}

	
    /* 記事タイトル */
	.st-header-post-data .entry-title:not(.st-css-no):not(.st-css-no2),
    #contentInner .post .entry-title:not(.st-css-no):not(.st-css-no2) {
				    }
    
    /* H2 */
    .post .entry-content h2:not(.st-css-no2),
    .post .entry-content .h2modoki{
				    }
    
    /* H3 */
    .post .entry-content h3:not(.st-css-no2):not(.post-card-title):not(#reply-title),
    .post .entry-content .h3modoki {
				    }
    
    /* H4 */
    .post .entry-content h4:not(.st-css-no2):not(.point),
    .post .entry-content .h4modoki {
				    }

    /* 記事一覧 */
	.no-thumbitiran h3:not(.st-css-no2) a, /* TOP・アーカイブ（サムネイル無し） */
	.no-thumbitiran h5 a, /* ショートコード一覧（サムネイル無し） */
    dd h3:not(.st-css-no2) a, /* TOP・アーカイブ */
	.post-card-list .post-card-title a, /* カードタイプEX */
	#st-magazine .kanren .st-top-box dd h3, /* JET */
    .kanren .clearfix dd h5:not(.st-css-no2) a {
				    }

	/*
	旧st-kanri.phpより移動（ここまで）
	-------------------------------------------*/

	
/*-- ここまで --*/
}


/*media Queries PCサイズ
----------------------------------------------------*/
@media only screen and (min-width: 960px) {

	/*-------------------------------------------
	旧st-kanri.phpより移動（ここから）
	*/

    /*--------------------------------
    各フォント設定
    ---------------------------------*/

	/* ブログカード */
	.post dd h5.st-cardbox-t {
	    font-size: 16px;
	    line-height: 26px;
	}
	/* 記事一覧 */
	dd h3:not(.st-css-no2) a, /*TOPとアーカイブ*/
	.kanren .clearfix dd h5:not(.st-css-no2) a { /*関連記事*/
	    font-size: 16px;
	    line-height: 26px;
	}

        
    /*基本のフォントサイズ*/
    .post .entry-content p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn), /* テキスト */
    .post .entry-content .st-kaiwa-hukidashi, /* ふきだし */
    .post .entry-content .st-kaiwa-hukidashi2, /* ふきだし */
    .post .entry-content .yellowbox, /* 黄色ボックス */
    .post .entry-content .graybox, /* グレーボックス */
    .post .entry-content .redbox, /* 薄赤ボックス */
    .post .entry-content #topnews .clearfix dd p, /* 一覧文字 */
    .post .entry-content ul li, /* ulリスト */
    .post .entry-content ol li, /* olリスト */
	.post .entry-content #st_toc_container > ul > li, /* 目次用 */
    .post .entry-content #comments #respond, /* コメント */
    .post .entry-content #comments h4, /* コメントタイトル */
	.post .entry-content h5:not(.kanren-t):not(.popular-t):not(.st-cardbox-t), /* H5 */
	.post .entry-content h6 {
					font-size: 16px;
							line-height: 31px;
			}

	/* スライドの抜粋 */
	.post .entry-content .post-slide-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-card-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .kanren:not(.st-cardbox) .clearfix dd p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn){
					font-size: 13px;
							line-height: 18px;
			}

		/*マルリスト・チェックリスト*/
    	.post ol.is-style-st-maruno,
		.post ul.is-style-st-maruck,
    	.post .maruno ol li,
		.post .maruck ul li{		
			line-height: calc( 16px + 5px );
    	}
    	.post ol.is-style-st-maruno li:before,
		.post ul.is-style-st-maruck li:before,
    	.post .maruno ol li:before,
		.post .maruck ul li:before{
        	min-width: calc( 16px + 5px );
        	height: calc( 16px + 5px );
        	line-height: calc( 16px + 5px );
    	}
	
    /* 記事タイトル */
	.st-header-post-data .entry-title:not(.st-css-no):not(.st-css-no2),
    #contentInner .post .entry-title:not(.st-css-no):not(.st-css-no2) {
				    }
    
    /* H2 */
    .post .entry-content h2:not(.st-css-no2),
    .post .entry-content .h2modoki{
				    }
    
    /* H3 */
    .post .entry-content h3:not(.st-css-no2):not(.post-card-title):not(#reply-title),
    .post .entry-content .h3modoki {
				    }

    /* H4 */
    .post .entry-content h4:not(.st-css-no2):not(.point),
    .post .entry-content .h4modoki {
				    }
    
    /* 記事一覧 */
	.no-thumbitiran h3:not(.st-css-no2) a, /* TOP・アーカイブ（サムネイル無し） */
	.no-thumbitiran h5 a, /* ショートコード一覧（サムネイル無し） */
    dd h3:not(.st-css-no2) a, /* TOP・アーカイブ */
	.post-card-list .post-card-title a, /* カードタイプEX */
	#st-magazine .kanren .st-top-box dd h3, /* JET */
    .post .kanren .clearfix dd h5:not(.st-css-no2) a {
				    }

	/*--------------------------------
	全体のサイズ
	---------------------------------*/

	.st-content-width, /* 汎用 */
	#st-menuwide, /*メニュー*/
	nav.smanone,
	nav.st5,
	#st-header-cardlink,
	#st-menuwide div.menu,
	#st-menuwide nav.menu,
	#st-header, /*ヘッダー*/
	#st-header-under-widgets-box, /*ヘッダー画像下*/
	#content, /*コンテンツ*/
	#footer-in /*フッター*/
	 { 
		max-width:1150px;
	}

	.st-lp-wide #content /* LPワイド */
	 { 
		max-width:100%;
	}

	#headbox
	 { 
		max-width:1130px;
	}

	.st-content-width { 
		margin: 0 auto;
	}

	
	/*1カラムの幅のサイズ*/
	.colum1:not(.st-lp-wide) #st-header-under-widgets-box,
	.colum1:not(.st-lp-wide) #content {
    	max-width: 1150px;
	}

	/* ワイドLPの左右にシャドウ -EX */
	.colum1.st-lp-wide #st-header,
	.colum1.st-lp-wide #content .st-lp-wide-content,
	.colum1.st-lp-wide #content .rankh3,
	.colum1.st-lp-wide #content .rank-guide,
	.colum1.st-lp-wide #content .rankid1,
	.colum1.st-lp-wide #content .rankid2,
	.colum1.st-lp-wide #content .rankid3,
	.colum1.st-lp-wide #content .rankst-box,
	.colum1.st-lp-wide .rankst-wrap,
	.colum1.st-lp-wide .widget_text,
	.colum1.st-lp-wide .top-wbox-u,
	.colum1.st-lp-wide .entry-title,
	.colum1.st-lp-wide #st-page .entry-title:not(.st-css-no2),
	.colum1.st-lp-wide #breadcrumb,
	.colum1.st-lp-wide .blogbox,
	.colum1.st-lp-wide .st-catgroup,
	.colum1.st-lp-wide .adbox,
	.colum1.st-lp-wide .st-widgets-box,
	.colum1.st-lp-wide .sns,
	.colum1.st-lp-wide .tagst,
	.colum1.st-lp-wide aside,
	.colum1.st-lp-wide .kanren,
	.colum1.st-lp-wide #topnews-box
	{
    	max-width: 1150px;
		margin-left: auto;
		margin-right: auto;
	}

	.st-lp-wide .st-lp-wide-wrapper {
    	margin-bottom: 20px;
	}

	
	/* ヘッダー画像/記事スライドショー横並び */
	
	
	    
        /*--------------------------------
        PCのレイアウト（右サイドバー）
        ---------------------------------*/
    
        #contentInner {
            float: left;
            width: 100%;
            margin-right: -300px;
        }
    
        main {
            margin-right: 320px;
            margin-left: 0px;
            background-color: #fff;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            padding: 30px 50px 30px;
        }
    
        #side aside {
            float: right;
            width: 300px;
            padding: 0px;
        }
    
    
        
    /**
     * サイト名とキャッチフレーズ有無の調整
     */
    
        
        
            #header-r .footermenust {
            margin: 0;
        }
        
            header .sitename {
                padding: 5px;
            margin: 0;
                    }
        #headbox {
            padding: 5px 10px!important;
        }
        
            #st-headwide #headbox {
			display: flex;
			justify-content: center;
							text-align: center;
			        }
        
            /*PCアドセンスを横並び*/
        .adbox:after {
            content: "";
            display: block;
            clear: both;
        }
        .adbox div {
            float:left;
            margin-right:20px;
            padding-top:0!important;
            padding-bottom:10px;
        }
    
        .adbox div:last-child {
            margin-right:0px;
        }
        
            /*TOC+*/
        #toc_container {
            padding-left: 30px;
            padding-right: 30px;
        }
    
        #toc_container > ul > li {
            font-size: 16px;
        }
        
    /*
    旧st-kanri.phpより移動（ここまで）
    -------------------------------------------*/

	/*TOC+*/
	#toc_container:not(.contracted) { /* 表示状態 */
					padding:20px 40px 10px;
							padding:20px 40px 10px;
			}

	/*ヘッダーの背景色*/
	
	/*メインコンテンツのボーダー*/
	
	
	/* メイン画像100% */
	
	/*wrapperに背景がある場合*/
	
	/*メニュー*/
	#st-menuwide {
					border-top: none;
			border-bottom: none;
		
					border-left: none;
			border-right: none;
			}

	
	
	#st-menuwide {
		
					background-image: url("");		
			background-color: #3b5998;
			}

	
			header .smanone ul.menu li{
			width: 160px;
		}
		header .smanone ul.sub-menu li ul.sub-menu{
			left: 160px;
		}
	
	header .smanone ul.menu li, 
	header nav.st5 ul.menu  li,
	header nav.st5 ul.menu  li,
	header #st-menuwide div.menu li,
	header #st-menuwide nav.menu li
	{
			border-right: none;
		}

	header .smanone ul.menu li li,
	header nav.st5 ul.menu li li,
	header #st-menuwide div.menu li li,
	header #st-menuwide nav.menu li li {
    	border:none;
	}

		header .smanone ul.menu li a, 
	header nav.st5 ul.menu  li a,
	header #st-menuwide div.menu li a,
	header #st-menuwide nav.menu li a,
	header .smanone ul.menu li a:hover, 
	header nav.st5 ul.menu  li a:hover,
	header #st-menuwide div.menu li a:hover,
	header #st-menuwide nav.menu li a:hover{
		color: #ffffff;
	}
	
	header .smanone ul.menu li:hover, 
	header nav.st5 ul.menu  li:hover,
	header #st-menuwide div.menu li:hover,
	header #st-menuwide nav.menu li:hover{
		background: rgba(255,255,255,0.1);
	}

	header .smanone ul.menu li li a:hover, 
	header nav.st5 ul.menu  li li a:hover,
	header #st-menuwide div.menu li li a:hover,
	header #st-menuwide nav.menu li li a:hover{
		opacity:0.9;
	}

			header .smanone ul.menu li a, 
		header nav.st5 ul.menu  li a,
		header #st-menuwide div.menu li a,
		header #st-menuwide nav.menu li a  {
			font-weight:bold;
		}
		header .smanone ul.menu li li a, 
		header nav.st5 ul.menu  li li a,
		header #st-menuwide div.menu li a,
		header #st-menuwide nav.menu li a  {
			font-weight:normal;
		}
	
			header .smanone ul.menu li li a {
							border-top-color: #3b5998;
				}
	
	/*メニューの上下のパディング*/
		

	/* グローバルメニュー */
			#st-menuwide {
			max-width: 100%;
					}
	
	
	/*ヘッダーウィジェット*/
	header .headbox .textwidget,
	#footer .headbox .textwidget{
					}

	
	
			/*トップ用おすすめタイトル*/
		.nowhits .pop-box {
			border-top-color: #222584;
		}
	
	/*記事エリアを広げる*/
	
	/*強制センタリング・中央寄せ
	------------------------------------------------------------*/
				
						.entry-content .h2modoki,
			.entry-content h2:not(.st-css-no)
			{
        							margin-left: -50px;
					margin-right: -50px;
            	
				        									padding-left:50px;
						padding-right:50px;
            									}
			.colum1 .entry-content .h2modoki,
			.colum1 .entry-content h2:not(.st-css-no)
			{
				margin-left: -70px;
				margin-right: -70px;
									padding-left:70px;
					padding-right:70px;
							}

			
			
			
			
						
				
			#side .smanone.st-excerpt {
			display:none;
		}
	
/*-- ここまで --*/
}

/*media Queries スマートフォンのみ（599px）以下
---------------------------------------------------------------------------------------------------*/
@media only screen and (max-width: 599px) {

    /*-------------------------------------------
    旧st-kanri.phpより移動（ここから）
    */
    
    /*--------------------------------
    各フォント設定
    ---------------------------------*/

	/* ブログカード */
	.post dd h5.st-cardbox-t {
	    font-size: 16px;
		line-height: 24px;
	}
	/* 記事一覧 */
	dd h3:not(.st-css-no2) a, /*TOPとアーカイブ*/
	.kanren .clearfix dd h5:not(.st-css-no2) a { /*関連記事*/
	    font-size: 16px;
		line-height: 24px;
	}

        
    /*基本のフォントサイズ*/
    .post .entry-content p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn), /* テキスト */
    .post .entry-content .st-kaiwa-hukidashi, /* ふきだし */
    .post .entry-content .st-kaiwa-hukidashi2, /* ふきだし */
    .post .entry-content .yellowbox, /* 黄色ボックス */
    .post .entry-content .graybox, /* グレーボックス */
    .post .entry-content .redbox, /* 薄赤ボックス */
    .post .entry-content #topnews .clearfix dd p, /* 一覧文字 */
    .post .entry-content ul li, /* ulリスト */
    .post .entry-content ol li, /* olリスト */
    .post .entry-content #st_toc_container > ul > li, /* 目次用 */
    .post .entry-content #comments #respond, /* コメント */
    .post .entry-content #comments h4, /* コメントタイトル */
    .post .entry-content h5:not(.kanren-t):not(.popular-t):not(.st-cardbox-t), /* H5 */
    .post .entry-content h6 {
                    }
    
    /* スライドの抜粋 */
    .post .entry-content .post-slide-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
    .post .entry-content .st-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
    .post .entry-content .st-card-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
    .post .entry-content .kanren:not(.st-cardbox) .clearfix dd p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn){
                    }
    
        
    /* 記事タイトル */
	.st-header-post-data .entry-title:not(.st-css-no):not(.st-css-no2),
    #contentInner .post .entry-title:not(.st-css-no):not(.st-css-no2) {
                    }

	
    /* H2 */
    .post .entry-content h2:not(.st-css-no2),
    .post .entry-content .h2modoki{
                    }
    
    /* H3 */
    .post .entry-content h3:not(.st-css-no2):not(.post-card-title):not(#reply-title),
    .post .entry-content .h3modoki {
                    }
    
    /* H4 */
    .post .entry-content h4:not(.st-css-no2):not(.point),
	.post .entry-content .h4modoki {
                    }

    /* 記事一覧 */
	.no-thumbitiran h3:not(.st-css-no2) a, /* TOP・アーカイブ（サムネイル無し） */
	.no-thumbitiran h5 a, /* ショートコード一覧（サムネイル無し） */
	dd h3:not(.st-css-no2) a, /* TOP・アーカイブ */
	.post-card-list .post-card-title a, /* カードタイプEX */
	#st-magazine .kanren .st-top-box dd h3, /* JET */
    .kanren .clearfix dd h5:not(.st-css-no2) a {
				    }

    /*
    旧st-kanri.phpより移動（ここまで）
    -------------------------------------------*/

	
/*-- ここまで --*/
}


/*-------------------------------------------
旧st-kanri.phpより移動（ここから）
*/


/*
旧st-kanri.phpより移動（ここまで）
-------------------------------------------*/

