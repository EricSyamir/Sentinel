<!DOCTYPE html>
<html lang="en-US">
<?php
	$con = mysqli_connect("localhost","root","","sentinel") or die(mysql_error());
	?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v20.9 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Sentinel</title>
	<link rel="canonical" href="index.html" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:image:width" content="290" />
	<meta property="og:image:height" content="290" />
	<meta property="og:image:type" content="image/png" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="4 minutes" />
	
		
	<!-- / Yoast SEO plugin. -->


	<script>
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/w3.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"
			}
		};
		/*! This file is auto-generated */
		! function (i, n) {
			var o, s, e;

			function c(e) {
				try {
					var t = {
						supportTests: e,
						timestamp: (new Date).valueOf()
					};
					sessionStorage.setItem(o, JSON.stringify(t))
				} catch (e) {}
			}

			function p(e, t, n) {
				e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
				var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
						.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
				return t.every(function (e, t) {
					return e === r[t]
				})
			}

			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(
							e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
							"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
							"\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
						);
					case "emoji":
						return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
				}
				return !1
			}

			function f(e, t, n) {
				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
						300, 150) : i.createElement("canvas"),
					a = r.getContext("2d", {
						willReadFrequently: !0
					}),
					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
				return e.forEach(function (e) {
					o[e] = t(a, e, n)
				}), o
			}

			function t(e) {
				var t = i.createElement("script");
				t.src = e, t.defer = !0, i.head.appendChild(t)
			}
			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, e = new Promise(function (e) {
				i.addEventListener("DOMContentLoaded", e, {
					once: !0
				})
			}), new Promise(function (t) {
				var n = function () {
					try {
						var e = JSON.parse(sessionStorage.getItem(o));
						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e
							.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
					} catch (e) {}
					return null
				}();
				if (!n) {
					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
						typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
								.toString()
							].join(",") + "));",
							r = new Blob([e], {
								type: "text/javascript"
							}),
							a = new Worker(URL.createObjectURL(r), {
								name: "wpTestEmojiSupports"
							});
						return void(a.onmessage = function (e) {
							c(n = e.data), a.terminate(), t(n)
						})
					} catch (e) {}
					c(n = f(s, u, p))
				}
				t(n)
			}).then(function (e) {
				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
					.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
						.everythingExceptFlag && n.supports[t]);
				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
					.DOMReady = !1, n.readyCallback = function () {
						n.DOMReady = !0
					}
			}).then(function () {
				return e
			}).then(function () {
				var e;
				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) :
					e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
			}))
		}((window, document), window._wpemojiSettings);
	</script>
	<link rel='stylesheet' id='astra-theme-css-css'
		href='wp-content/themes/astra/assets/css/minified/main.min31a4.css?ver=4.1.5' media='all' />
	<style id='astra-theme-css-inline-css'>
		:root {
			--ast-container-default-xlg-padding: 3em;
			--ast-container-default-lg-padding: 3em;
			--ast-container-default-slg-padding: 2em;
			--ast-container-default-md-padding: 3em;
			--ast-container-default-sm-padding: 3em;
			--ast-container-default-xs-padding: 2.4em;
			--ast-container-default-xxs-padding: 1.8em;
			--ast-code-block-background: #EEEEEE;
			--ast-comment-inputs-background: #FAFAFA;
		}

		html {
			font-size: 93.75%;
		}

		a {
			color: var(--ast-global-color-0);
		}

		a:hover,
		a:focus {
			color: var(--ast-global-color-1);
		}

		body,
		button,
		input,
		select,
		textarea,
		.ast-button,
		.ast-custom-button {
			font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
			font-weight: inherit;
			font-size: 15px;
			font-size: 1rem;
			line-height: 1.6em;
		}

		blockquote {
			color: var(--ast-global-color-3);
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6,
		.site-title,
		.site-title a {
			font-weight: 600;
		}

		.site-title {
			font-size: 35px;
			font-size: 2.3333333333333rem;
			display: block;
		}

		.site-header .site-description {
			font-size: 15px;
			font-size: 1rem;
			display: none;
		}

		.entry-title {
			font-size: 30px;
			font-size: 2rem;
		}

		h1,
		.entry-content h1 {
			font-size: 40px;
			font-size: 2.6666666666667rem;
			font-weight: 600;
			line-height: 1.4em;
		}

		h2,
		.entry-content h2 {
			font-size: 30px;
			font-size: 2rem;
			font-weight: 600;
			line-height: 1.25em;
		}

		h3,
		.entry-content h3 {
			font-size: 25px;
			font-size: 1.6666666666667rem;
			font-weight: 600;
			line-height: 1.2em;
		}

		h4,
		.entry-content h4 {
			font-size: 20px;
			font-size: 1.3333333333333rem;
			line-height: 1.2em;
			font-weight: 600;
		}

		h5,
		.entry-content h5 {
			font-size: 18px;
			font-size: 1.2rem;
			line-height: 1.2em;
			font-weight: 600;
		}

		h6,
		.entry-content h6 {
			font-size: 15px;
			font-size: 1rem;
			line-height: 1.25em;
			font-weight: 600;
		}

		::selection {
			background-color: var(--ast-global-color-0);
			color: #ffffff;
		}

		body,
		h1,
		.entry-title a,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: var(--ast-global-color-3);
		}

		.tagcloud a:hover,
		.tagcloud a:focus,
		.tagcloud a.current-item {
			color: #ffffff;
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
		}

		input:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="reset"]:focus,
		input[type="search"]:focus,
		textarea:focus {
			border-color: var(--ast-global-color-0);
		}

		input[type="radio"]:checked,
		input[type=reset],
		input[type="checkbox"]:checked,
		input[type="checkbox"]:hover:checked,
		input[type="checkbox"]:focus:checked,
		input[type=range]::-webkit-slider-thumb {
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
			box-shadow: none;
		}

		.site-footer a:hover+.post-count,
		.site-footer a:focus+.post-count {
			background: var(--ast-global-color-0);
			border-color: var(--ast-global-color-0);
		}

		.single .nav-links .nav-previous,
		.single .nav-links .nav-next {
			color: var(--ast-global-color-0);
		}

		.entry-meta,
		.entry-meta * {
			line-height: 1.45;
			color: var(--ast-global-color-0);
		}

		.entry-meta a:hover,
		.entry-meta a:hover *,
		.entry-meta a:focus,
		.entry-meta a:focus *,
		.page-links>.page-link,
		.page-links .page-link:hover,
		.post-navigation a:hover {
			color: var(--ast-global-color-1);
		}

		#cat option,
		.secondary .calendar_wrap thead a,
		.secondary .calendar_wrap thead a:visited {
			color: var(--ast-global-color-0);
		}

		.secondary .calendar_wrap #today,
		.ast-progress-val span {
			background: var(--ast-global-color-0);
		}

		.secondary a:hover+.post-count,
		.secondary a:focus+.post-count {
			background: var(--ast-global-color-0);
			border-color: var(--ast-global-color-0);
		}

		.calendar_wrap #today>a {
			color: #ffffff;
		}

		.page-links .page-link,
		.single .post-navigation a {
			color: var(--ast-global-color-0);
		}

		.ast-archive-title {
			color: var(--ast-global-color-2);
		}

		.widget-title {
			font-size: 21px;
			font-size: 1.4rem;
			color: var(--ast-global-color-2);
		}

		.ast-single-post .entry-content a,
		.ast-comment-content a:not(.ast-comment-edit-reply-wrap a) {
			text-decoration: underline;
		}

		.ast-single-post .wp-block-button .wp-block-button__link,
		.ast-single-post .elementor-button-wrapper .elementor-button,
		.ast-single-post .entry-content .uagb-tab a,
		.ast-single-post .entry-content .uagb-ifb-cta a,
		.ast-single-post .entry-content .wp-block-uagb-buttons a,
		.ast-single-post .entry-content .uabb-module-content a,
		.ast-single-post .entry-content .uagb-post-grid a,
		.ast-single-post .entry-content .uagb-timeline a,
		.ast-single-post .entry-content .uagb-toc__wrap a,
		.ast-single-post .entry-content .uagb-taxomony-box a,
		.ast-single-post .entry-content .woocommerce a,
		.entry-content .wp-block-latest-posts>li>a,
		.ast-single-post .entry-content .wp-block-file__button {
			text-decoration: none;
		}

		a:focus-visible,
		.ast-menu-toggle:focus-visible,
		.site .skip-link:focus-visible,
		.wp-block-loginout input:focus-visible,
		.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,
		.ast-header-navigation-arrow:focus-visible {
			outline-style: dotted;
			outline-color: inherit;
			outline-width: thin;
			border-color: transparent;
		}

		input:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="reset"]:focus,
		input[type="search"]:focus,
		textarea:focus,
		.wp-block-search__input:focus,
		[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,
		.ast-mobile-popup-drawer.active .menu-toggle-close:focus,
		.woocommerce-ordering select.orderby:focus,
		#ast-scroll-top:focus,
		.woocommerce a.add_to_cart_button:focus,
		.woocommerce .button.single_add_to_cart_button:focus {
			border-style: dotted;
			border-color: inherit;
			border-width: thin;
			outline-color: transparent;
		}

		.ast-logo-title-inline .site-logo-img {
			padding-right: 1em;
		}

		.ast-page-builder-template .hentry {
			margin: 0;
		}

		.ast-page-builder-template .site-content>.ast-container {
			max-width: 100%;
			padding: 0;
		}

		.ast-page-builder-template .site-content #primary {
			padding: 0;
			margin: 0;
		}

		.ast-page-builder-template .no-results {
			text-align: center;
			margin: 4em auto;
		}

		.ast-page-builder-template .ast-pagination {
			padding: 2em;
		}

		.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
			margin-top: 0;
		}

		.ast-page-builder-template .entry-header.ast-header-without-markup {
			margin-top: 0;
			margin-bottom: 0;
		}

		.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
			margin-bottom: 0;
		}

		.ast-page-builder-template.single .post-navigation {
			padding-bottom: 2em;
		}

		.ast-page-builder-template.single-post .site-content>.ast-container {
			max-width: 100%;
		}

		.ast-page-builder-template .entry-header {
			margin-top: 2em;
			margin-left: auto;
			margin-right: auto;
		}

		.ast-page-builder-template .ast-archive-description {
			margin: 2em auto 0;
			padding-left: 20px;
			padding-right: 20px;
		}

		.ast-page-builder-template .ast-row {
			margin-left: 0;
			margin-right: 0;
		}

		.single.ast-page-builder-template .entry-header+.entry-content {
			margin-bottom: 2em;
		}

		@media(min-width: 921px) {

			.ast-page-builder-template.archive.ast-right-sidebar .ast-row article,
			.ast-page-builder-template.archive.ast-left-sidebar .ast-row article {
				padding-left: 0;
				padding-right: 0;
			}
		}

		@media (max-width:921px) {
			#ast-desktop-header {
				display: none;
			}
		}

		@media (min-width:921px) {
			#ast-mobile-header {
				display: none;
			}
		}

		.wp-block-buttons.aligncenter {
			justify-content: center;
		}

		@media (max-width:921px) {

			.ast-theme-transparent-header #primary,
			.ast-theme-transparent-header #secondary {
				padding: 0;
			}
		}

		@media (max-width:921px) {
			.ast-plain-container.ast-no-sidebar #primary {
				padding: 0;
			}
		}

		.ast-plain-container.ast-no-sidebar #primary {
			margin-top: 0;
			margin-bottom: 0;
		}

		.wp-block-button.is-style-outline .wp-block-button__link {
			border-color: var(--ast-global-color-0);
		}

		div.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
		div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
			color: var(--ast-global-color-0);
		}

		.wp-block-button.is-style-outline .wp-block-button__link:hover,
		div.wp-block-button.is-style-outline .wp-block-button__link:focus,
		div.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color):hover,
		div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover {
			color: #ffffff;
			background-color: var(--ast-global-color-1);
			border-color: var(--ast-global-color-1);
		}

		.post-page-numbers.current .page-link,
		.ast-pagination .page-numbers.current {
			color: #ffffff;
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
			border-radius: 2px;
		}

		h1.widget-title {
			font-weight: 600;
		}

		h2.widget-title {
			font-weight: 600;
		}

		h3.widget-title {
			font-weight: 600;
		}

		#page {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.ast-404-layout-1 h1.page-title {
			color: var(--ast-global-color-2);
		}

		.single .post-navigation a {
			line-height: 1em;
			height: inherit;
		}

		.error-404 .page-sub-title {
			font-size: 1.5rem;
			font-weight: inherit;
		}

		.search .site-content .content-area .search-form {
			margin-bottom: 0;
		}

		#page .site-content {
			flex-grow: 1;
		}

		.widget {
			margin-bottom: 3.5em;
		}

		#secondary li {
			line-height: 1.5em;
		}

		#secondary .wp-block-group h2 {
			margin-bottom: 0.7em;
		}

		#secondary h2 {
			font-size: 1.7rem;
		}

		.ast-separate-container .ast-article-post,
		.ast-separate-container .ast-article-single,
		.ast-separate-container .ast-comment-list li.depth-1,
		.ast-separate-container .comment-respond {
			padding: 3em;
		}

		.ast-separate-container .ast-comment-list li.depth-1,
		.hentry {
			margin-bottom: 2em;
		}

		.ast-separate-container .ast-archive-description,
		.ast-separate-container .ast-author-box {
			background-color: var(--ast-global-color-5);
			border-bottom: 1px solid var(--ast-border-color);
		}

		.ast-separate-container .comments-title {
			padding: 2em 2em 0 2em;
		}

		.ast-page-builder-template .comment-form-textarea,
		.ast-comment-formwrap .ast-grid-common-col {
			padding: 0;
		}

		.ast-comment-formwrap {
			padding: 0 20px;
			display: inline-flex;
			column-gap: 20px;
		}

		.archive.ast-page-builder-template .entry-header {
			margin-top: 2em;
		}

		.ast-page-builder-template .ast-comment-formwrap {
			width: 100%;
		}

		.entry-title {
			margin-bottom: 0.5em;
		}

		.ast-archive-description p {
			font-size: inherit;
			font-weight: inherit;
			line-height: inherit;
		}

		@media (min-width:921px) {

			.ast-left-sidebar.ast-page-builder-template #secondary,
			.archive.ast-right-sidebar.ast-page-builder-template .site-main {
				padding-left: 20px;
				padding-right: 20px;
			}
		}

		@media (max-width:544px) {
			.ast-comment-formwrap.ast-row {
				column-gap: 10px;
				display: inline-block;
			}

			#ast-commentform .ast-grid-common-col {
				position: relative;
				width: 100%;
			}
		}

		@media (min-width:1201px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .ast-author-box,
			.ast-separate-container .ast-404-layout-1,
			.ast-separate-container .no-results {
				padding: 3em;
			}
		}

		@media (max-width:921px) {

			.ast-separate-container #primary,
			.ast-separate-container #secondary {
				padding: 1.5em 0;
			}

			#primary,
			#secondary {
				padding: 1.5em 0;
				margin: 0;
			}

			.ast-left-sidebar #content>.ast-container {
				display: flex;
				flex-direction: column-reverse;
				width: 100%;
			}
		}

		@media (min-width:922px) {

			.ast-separate-container.ast-right-sidebar #primary,
			.ast-separate-container.ast-left-sidebar #primary {
				border: 0;
			}

			.search-no-results.ast-separate-container #primary {
				margin-bottom: 4em;
			}
		}

		.elementor-button-wrapper .elementor-button {
			border-style: solid;
			text-decoration: none;
			border-top-width: 0;
			border-right-width: 0;
			border-left-width: 0;
			border-bottom-width: 0;
		}

		body .elementor-button.elementor-size-sm,
		body .elementor-button.elementor-size-xs,
		body .elementor-button.elementor-size-md,
		body .elementor-button.elementor-size-lg,
		body .elementor-button.elementor-size-xl,
		body .elementor-button {
			padding-top: 15px;
			padding-right: 30px;
			padding-bottom: 15px;
			padding-left: 30px;
		}

		@media (max-width:921px) {

			.elementor-button-wrapper .elementor-button.elementor-size-sm,
			.elementor-button-wrapper .elementor-button.elementor-size-xs,
			.elementor-button-wrapper .elementor-button.elementor-size-md,
			.elementor-button-wrapper .elementor-button.elementor-size-lg,
			.elementor-button-wrapper .elementor-button.elementor-size-xl,
			.elementor-button-wrapper .elementor-button {
				padding-top: 14px;
				padding-right: 28px;
				padding-bottom: 14px;
				padding-left: 28px;
			}
		}

		@media (max-width:544px) {

			.elementor-button-wrapper .elementor-button.elementor-size-sm,
			.elementor-button-wrapper .elementor-button.elementor-size-xs,
			.elementor-button-wrapper .elementor-button.elementor-size-md,
			.elementor-button-wrapper .elementor-button.elementor-size-lg,
			.elementor-button-wrapper .elementor-button.elementor-size-xl,
			.elementor-button-wrapper .elementor-button {
				padding-top: 12px;
				padding-right: 24px;
				padding-bottom: 12px;
				padding-left: 24px;
			}
		}

		.elementor-button-wrapper .elementor-button {
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
		}

		.elementor-button-wrapper .elementor-button:hover,
		.elementor-button-wrapper .elementor-button:focus {
			color: #ffffff;
			background-color: var(--ast-global-color-1);
			border-color: var(--ast-global-color-1);
		}

		.wp-block-button .wp-block-button__link,
		.elementor-button-wrapper .elementor-button {
			color: #ffffff;
		}

		.elementor-button-wrapper .elementor-button {
			line-height: 1em;
		}

		.wp-block-button .wp-block-button__link:hover,
		.wp-block-button .wp-block-button__link:focus {
			color: #ffffff;
			background-color: var(--ast-global-color-1);
			border-color: var(--ast-global-color-1);
		}

		.elementor-widget-heading h1.elementor-heading-title {
			line-height: 1.4em;
		}

		.elementor-widget-heading h2.elementor-heading-title {
			line-height: 1.25em;
		}

		.elementor-widget-heading h3.elementor-heading-title {
			line-height: 1.2em;
		}

		.elementor-widget-heading h4.elementor-heading-title {
			line-height: 1.2em;
		}

		.elementor-widget-heading h5.elementor-heading-title {
			line-height: 1.2em;
		}

		.elementor-widget-heading h6.elementor-heading-title {
			line-height: 1.25em;
		}

		.wp-block-button .wp-block-button__link,
		.wp-block-search .wp-block-search__button,
		body .wp-block-file .wp-block-file__button {
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
			color: #ffffff;
			font-family: inherit;
			font-weight: inherit;
			line-height: 1em;
			padding-top: 15px;
			padding-right: 30px;
			padding-bottom: 15px;
			padding-left: 30px;
		}

		@media (max-width:921px) {

			.wp-block-button .wp-block-button__link,
			.wp-block-search .wp-block-search__button,
			body .wp-block-file .wp-block-file__button {
				padding-top: 14px;
				padding-right: 28px;
				padding-bottom: 14px;
				padding-left: 28px;
			}
		}

		@media (max-width:544px) {

			.wp-block-button .wp-block-button__link,
			.wp-block-search .wp-block-search__button,
			body .wp-block-file .wp-block-file__button {
				padding-top: 12px;
				padding-right: 24px;
				padding-bottom: 12px;
				padding-left: 24px;
			}
		}

		.menu-toggle,
		button,
		.ast-button,
		.ast-custom-button,
		.button,
		input#submit,
		input[type="button"],
		input[type="submit"],
		input[type="reset"],
		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
		body .wp-block-file .wp-block-file__button,
		.search .search-submit {
			border-style: solid;
			border-top-width: 0;
			border-right-width: 0;
			border-left-width: 0;
			border-bottom-width: 0;
			color: #ffffff;
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
			padding-top: 15px;
			padding-right: 30px;
			padding-bottom: 15px;
			padding-left: 30px;
			font-family: inherit;
			font-weight: inherit;
			line-height: 1em;
		}

		button:focus,
		.menu-toggle:hover,
		button:hover,
		.ast-button:hover,
		.ast-custom-button:hover .button:hover,
		.ast-custom-button:hover,
		input[type=reset]:hover,
		input[type=reset]:focus,
		input#submit:hover,
		input#submit:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,
		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,
		body .wp-block-file .wp-block-file__button:hover,
		body .wp-block-file .wp-block-file__button:focus {
			color: #ffffff;
			background-color: var(--ast-global-color-1);
			border-color: var(--ast-global-color-1);
		}

		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button.has-icon {
			padding-top: calc(15px - 3px);
			padding-right: calc(30px - 3px);
			padding-bottom: calc(15px - 3px);
			padding-left: calc(30px - 3px);
		}

		@media (max-width:921px) {

			.menu-toggle,
			button,
			.ast-button,
			.ast-custom-button,
			.button,
			input#submit,
			input[type="button"],
			input[type="submit"],
			input[type="reset"],
			form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
			body .wp-block-file .wp-block-file__button,
			.search .search-submit {
				padding-top: 14px;
				padding-right: 28px;
				padding-bottom: 14px;
				padding-left: 28px;
			}
		}

		@media (max-width:544px) {

			.menu-toggle,
			button,
			.ast-button,
			.ast-custom-button,
			.button,
			input#submit,
			input[type="button"],
			input[type="submit"],
			input[type="reset"],
			form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
			body .wp-block-file .wp-block-file__button,
			.search .search-submit {
				padding-top: 12px;
				padding-right: 24px;
				padding-bottom: 12px;
				padding-left: 24px;
			}
		}

		@media (max-width:921px) {
			.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
				display: inline-block;
			}

			.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
				margin: 0;
			}

			.ast-comment-avatar-wrap img {
				max-width: 2.5em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 2.14em;
			}

			.ast-separate-container .comment-respond {
				padding: 2em 2.14em;
			}

			.ast-comment-meta {
				padding: 0 1.8888em 1.3333em;
			}
		}

		@media (min-width:544px) {
			.ast-container {
				max-width: 100%;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .comments-title,
			.ast-separate-container .ast-archive-description {
				padding: 1.5em 1em;
			}

			.ast-separate-container #content .ast-container {
				padding-left: 0.54em;
				padding-right: 0.54em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 1em;
				margin-bottom: 1.5em;
			}

			.ast-separate-container .ast-comment-list .bypostauthor {
				padding: .5em;
			}

			.ast-search-menu-icon.ast-dropdown-active .search-field {
				width: 170px;
			}
		}

		.ast-separate-container {
			background-color: var(--ast-global-color-4);
			;
		}

		@media (max-width:921px) {
			.site-title {
				display: block;
			}

			.site-header .site-description {
				display: none;
			}

			.entry-title {
				font-size: 30px;
			}

			h1,
			.entry-content h1 {
				font-size: 30px;
			}

			h2,
			.entry-content h2 {
				font-size: 25px;
			}

			h3,
			.entry-content h3 {
				font-size: 20px;
			}
		}

		@media (max-width:544px) {
			.site-title {
				display: block;
			}

			.site-header .site-description {
				display: none;
			}

			.entry-title {
				font-size: 30px;
			}

			h1,
			.entry-content h1 {
				font-size: 30px;
			}

			h2,
			.entry-content h2 {
				font-size: 25px;
			}

			h3,
			.entry-content h3 {
				font-size: 20px;
			}
		}

		@media (max-width:921px) {
			html {
				font-size: 85.5%;
			}
		}

		@media (max-width:544px) {
			html {
				font-size: 85.5%;
			}
		}

		@media (min-width:922px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		@media (min-width:922px) {
			.site-content .ast-container {
				display: flex;
			}
		}

		@media (max-width:921px) {
			.site-content .ast-container {
				flex-direction: column;
			}
		}

		@media (min-width:922px) {

			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
				margin-left: -0px;
			}
		}

		blockquote,
		cite {
			font-style: initial;
		}

		.wp-block-file {
			display: flex;
			align-items: center;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.wp-block-pullquote {
			border: none;
		}

		.wp-block-pullquote blockquote::before {
			content: "\201D";
			font-family: "Helvetica", sans-serif;
			display: flex;
			transform: rotate(180deg);
			font-size: 6rem;
			font-style: normal;
			line-height: 1;
			font-weight: bold;
			align-items: center;
			justify-content: center;
		}

		.has-text-align-right>blockquote::before {
			justify-content: flex-start;
		}

		.has-text-align-left>blockquote::before {
			justify-content: flex-end;
		}

		figure.wp-block-pullquote.is-style-solid-color blockquote {
			max-width: 100%;
			text-align: inherit;
		}

		html body {
			--wp--custom--ast-default-block-top-padding: 3em;
			--wp--custom--ast-default-block-right-padding: 3em;
			--wp--custom--ast-default-block-bottom-padding: 3em;
			--wp--custom--ast-default-block-left-padding: 3em;
			--wp--custom--ast-container-width: 1200px;
			--wp--custom--ast-content-width-size: 1200px;
			--wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));
		}

		.ast-narrow-container {
			--wp--custom--ast-content-width-size: 750px;
			--wp--custom--ast-wide-width-size: 750px;
		}

		@media(max-width: 921px) {
			html body {
				--wp--custom--ast-default-block-top-padding: 3em;
				--wp--custom--ast-default-block-right-padding: 2em;
				--wp--custom--ast-default-block-bottom-padding: 3em;
				--wp--custom--ast-default-block-left-padding: 2em;
			}
		}

		@media(max-width: 544px) {
			html body {
				--wp--custom--ast-default-block-top-padding: 3em;
				--wp--custom--ast-default-block-right-padding: 1.5em;
				--wp--custom--ast-default-block-bottom-padding: 3em;
				--wp--custom--ast-default-block-left-padding: 1.5em;
			}
		}

		.entry-content>.wp-block-group,
		.entry-content>.wp-block-cover,
		.entry-content>.wp-block-columns {
			padding-top: var(--wp--custom--ast-default-block-top-padding);
			padding-right: var(--wp--custom--ast-default-block-right-padding);
			padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);
			padding-left: var(--wp--custom--ast-default-block-left-padding);
		}

		.ast-plain-container.ast-no-sidebar .entry-content>.alignfull,
		.ast-page-builder-template .ast-no-sidebar .entry-content>.alignfull {
			margin-left: calc(-50vw + 50%);
			margin-right: calc(-50vw + 50%);
			max-width: 100vw;
			width: 100vw;
		}

		.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,
		.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,
		.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,
		.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,
		.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,
		.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,
		.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,
		.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,
		.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,
		.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,
		.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,
		.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		[ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {
			height: 0;
		}

		[ast-blocks-layout] .wp-block-separator {
			margin: 20px auto;
		}

		[ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
			max-width: 100px;
		}

		[ast-blocks-layout] .wp-block-separator.has-background {
			padding: 0;
		}

		.entry-content[ast-blocks-layout]>* {
			max-width: var(--wp--custom--ast-content-width-size);
			margin-left: auto;
			margin-right: auto;
		}

		.entry-content[ast-blocks-layout]>.alignwide {
			max-width: var(--wp--custom--ast-wide-width-size);
		}

		.entry-content[ast-blocks-layout] .alignfull {
			max-width: none;
		}

		.entry-content .wp-block-columns {
			margin-bottom: 0;
		}

		blockquote {
			margin: 1.5em;
			border: none;
		}

		.wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {
			border-left: 5px solid rgba(0, 0, 0, 0.05);
		}

		.has-text-align-right>blockquote,
		blockquote.has-text-align-right {
			border-right: 5px solid rgba(0, 0, 0, 0.05);
		}

		.has-text-align-left>blockquote,
		blockquote.has-text-align-left {
			border-left: 5px solid rgba(0, 0, 0, 0.05);
		}

		.wp-block-site-tagline,
		.wp-block-latest-posts .read-more {
			margin-top: 15px;
		}

		.wp-block-loginout p label {
			display: block;
		}

		.wp-block-loginout p:not(.login-remember):not(.login-submit) input {
			width: 100%;
		}

		.wp-block-loginout input:focus {
			border-color: transparent;
		}

		.wp-block-loginout input:focus {
			outline: thin dotted;
		}

		.entry-content .wp-block-media-text .wp-block-media-text__content {
			padding: 0 0 0 8%;
		}

		.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
			padding: 0 8% 0 0;
		}

		.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
			padding: 8%;
		}

		.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
		.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
		.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
		.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
		.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
		.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {
			color: var(--ast-global-color-5);
		}

		.wp-block-loginout .login-remember input {
			width: 1.1rem;
			height: 1.1rem;
			margin: 0 5px 4px 0;
			vertical-align: middle;
		}

		.wp-block-latest-posts>li>*:first-child,
		.wp-block-latest-posts:not(.is-grid)>li:first-child {
			margin-top: 0;
		}

		.wp-block-search__inside-wrapper .wp-block-search__input {
			padding: 0 10px;
			color: var(--ast-global-color-3);
			background: var(--ast-global-color-5);
			border-color: var(--ast-border-color);
		}

		.wp-block-latest-posts .read-more {
			margin-bottom: 1.5em;
		}

		.wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {
			padding-top: 5px;
			padding-bottom: 5px;
		}

		.wp-block-latest-posts .wp-block-latest-posts__post-date,
		.wp-block-latest-posts .wp-block-latest-posts__post-author {
			font-size: 1rem;
		}

		.wp-block-latest-posts>li>*,
		.wp-block-latest-posts:not(.is-grid)>li {
			margin-top: 12px;
			margin-bottom: 12px;
		}

		.ast-page-builder-template .entry-content[ast-blocks-layout]>*,
		.ast-page-builder-template .entry-content[ast-blocks-layout]>.alignfull>* {
			max-width: none;
		}

		.ast-page-builder-template .entry-content[ast-blocks-layout]>.alignwide>* {
			max-width: var(--wp--custom--ast-wide-width-size);
		}

		.ast-page-builder-template .entry-content[ast-blocks-layout]>.inherit-container-width>*,
		.ast-page-builder-template .entry-content[ast-blocks-layout]>*>*,
		.entry-content[ast-blocks-layout]>.wp-block-cover .wp-block-cover__inner-container {
			max-width: var(--wp--custom--ast-content-width-size);
			margin-left: auto;
			margin-right: auto;
		}

		.entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {
			width: auto;
		}

		@media(max-width: 1200px) {

			.ast-separate-container .entry-content>.alignfull,
			.ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
			.ast-plain-container .entry-content[ast-blocks-layout]>.alignwide,
			.ast-plain-container .entry-content .alignfull {
				margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
				margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
			}
		}

		@media(min-width: 1201px) {
			.ast-separate-container .entry-content>.alignfull {
				margin-left: calc(-1 * var(--ast-container-default-xlg-padding));
				margin-right: calc(-1 * var(--ast-container-default-xlg-padding));
			}

			.ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
			.ast-plain-container .entry-content[ast-blocks-layout]>.alignwide {
				margin-left: calc(-1 * var(--wp--custom--ast-default-block-left-padding));
				margin-right: calc(-1 * var(--wp--custom--ast-default-block-right-padding));
			}
		}

		@media(min-width: 921px) {

			.ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)),
			.ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)) {
				max-width: calc(var(--wp--custom--ast-content-width-size) + 80px);
			}

			.ast-plain-container.ast-right-sidebar .entry-content[ast-blocks-layout] .alignfull,
			.ast-plain-container.ast-left-sidebar .entry-content[ast-blocks-layout] .alignfull {
				margin-left: -60px;
				margin-right: -60px;
			}
		}

		@media(min-width: 544px) {
			.entry-content>.alignleft {
				margin-right: 20px;
			}

			.entry-content>.alignright {
				margin-left: 20px;
			}
		}

		@media (max-width:544px) {
			.wp-block-columns .wp-block-column:not(:last-child) {
				margin-bottom: 20px;
			}

			.wp-block-latest-posts {
				margin: 0;
			}
		}

		@media(max-width: 600px) {

			.entry-content .wp-block-media-text .wp-block-media-text__content,
			.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
				padding: 8% 0 0;
			}

			.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
				padding: 8%;
			}
		}

		.ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {
			max-width: 100%;
			margin-left: auto;
			margin-right: auto;
		}

		:root .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root {
			--ast-global-color-0: #0170B9;
			--ast-global-color-1: #3a3a3a;
			--ast-global-color-2: #3a3a3a;
			--ast-global-color-3: #4B4F58;
			--ast-global-color-4: #F5F5F5;
			--ast-global-color-5: #FFFFFF;
			--ast-global-color-6: #E5E5E5;
			--ast-global-color-7: #424242;
			--ast-global-color-8: #000000;
		}

		:root {
			--ast-border-color: var(--ast-global-color-6);
		}

		.ast-single-entry-banner {
			-js-display: flex;
			display: flex;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			position: relative;
			background: #eeeeee;
		}

		.ast-single-entry-banner[data-banner-layout="layout-1"] {
			max-width: 1200px;
			background: inherit;
			padding: 20px 0;
		}

		.ast-single-entry-banner[data-banner-width-type="custom"] {
			margin: 0 auto;
			width: 100%;
		}

		.ast-single-entry-banner+.site-content .entry-header {
			margin-bottom: 0;
		}

		header.entry-header>*:not(:last-child) {
			margin-bottom: 10px;
		}

		.ast-archive-entry-banner {
			-js-display: flex;
			display: flex;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			position: relative;
			background: #eeeeee;
		}

		.ast-archive-entry-banner[data-banner-width-type="custom"] {
			margin: 0 auto;
			width: 100%;
		}

		.ast-archive-entry-banner[data-banner-layout="layout-1"] {
			background: inherit;
			padding: 20px 0;
			text-align: left;
		}

		body.archive .ast-archive-description {
			max-width: 1200px;
			width: 100%;
			text-align: left;
			padding-top: 3em;
			padding-right: 3em;
			padding-bottom: 3em;
			padding-left: 3em;
		}

		body.archive .ast-archive-description .ast-archive-title,
		body.archive .ast-archive-description .ast-archive-title * {
			font-size: 40px;
			font-size: 2.6666666666667rem;
		}

		body.archive .ast-archive-description>*:not(:last-child) {
			margin-bottom: 10px;
		}

		@media (max-width:921px) {
			body.archive .ast-archive-description {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			body.archive .ast-archive-description {
				text-align: left;
			}
		}

		.ast-breadcrumbs .trail-browse,
		.ast-breadcrumbs .trail-items,
		.ast-breadcrumbs .trail-items li {
			display: inline-block;
			margin: 0;
			padding: 0;
			border: none;
			background: inherit;
			text-indent: 0;
			text-decoration: none;
		}

		.ast-breadcrumbs .trail-browse {
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			color: inherit;
		}

		.ast-breadcrumbs .trail-items {
			list-style: none;
		}

		.trail-items li::after {
			padding: 0 0.3em;
			content: "\00bb";
		}

		.trail-items li:last-of-type::after {
			display: none;
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: var(--ast-global-color-2);
		}

		.entry-title a {
			color: var(--ast-global-color-2);
		}

		@media (max-width:921px) {

			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
				grid-column: 1 / -1;
			}
		}

		@media (max-width:544px) {

			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
				grid-column: 1 / -1;
			}
		}

		.ast-builder-layout-element[data-section="title_tagline"] {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
				display: flex;
			}
		}

		.ast-builder-menu-1 {
			font-family: inherit;
			font-weight: inherit;
		}

		.ast-builder-menu-1 .sub-menu,
		.ast-builder-menu-1 .inline-on-mobile .sub-menu {
			border-top-width: 2px;
			border-bottom-width: 0;
			border-right-width: 0;
			border-left-width: 0;
			border-color: var(--ast-global-color-0);
			border-style: solid;
		}

		.ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
		.ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
			margin-top: 0;
		}

		.ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
		.ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
			height: calc(0px + 5px);
		}

		.ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
			border-style: none;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}

			.ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
				content: unset;
			}

			.ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
			.ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
				margin-top: 0;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}

			.ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
			.ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
				margin-top: 0;
			}
		}

		.ast-builder-menu-1 {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-menu-1 {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-menu-1 {
				display: flex;
			}
		}

		.site-below-footer-wrap {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] {
			background-color: #eeeeee;
			;
			min-height: 80px;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
		.site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
			align-items: flex-start;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
			display: flex;
			margin-bottom: 0;
		}

		.ast-builder-grid-row-full .ast-builder-grid-row {
			grid-template-columns: 1fr;
		}

		@media (max-width:921px) {
			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
				display: flex;
				margin-bottom: 0;
			}

			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
				display: block;
				margin-bottom: 10px;
			}

			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
				grid-template-columns: 1fr;
			}
		}

		@media (max-width:544px) {
			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
				display: flex;
				margin-bottom: 0;
			}

			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
				display: block;
				margin-bottom: 10px;
			}

			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
				grid-template-columns: 1fr;
			}
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] {
			display: grid;
		}

		@media (max-width:921px) {
			.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
				display: grid;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
				display: grid;
			}
		}

		.ast-footer-copyright {
			text-align: center;
		}

		.ast-footer-copyright {
			color: var(--ast-global-color-3);
		}

		@media (max-width:921px) {
			.ast-footer-copyright {
				text-align: center;
			}
		}

		@media (max-width:544px) {
			.ast-footer-copyright {
				text-align: center;
			}
		}

		.ast-footer-copyright.ast-builder-layout-element {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
				display: flex;
			}
		}

		.footer-widget-area.widget-area.site-footer-focus-item {
			width: auto;
		}

		.elementor-widget-heading .elementor-heading-title {
			margin: 0;
		}

		.elementor-page .ast-menu-toggle {
			color: unset !important;
			background: unset !important;
		}

		.elementor-post.elementor-grid-item.hentry {
			margin-bottom: 0;
		}

		.woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
		.elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
			width: auto;
			margin: 0;
			float: none;
		}

		.elementor-toc__list-wrapper {
			margin: 0;
		}

		.ast-left-sidebar .elementor-section.elementor-section-stretched,
		.ast-right-sidebar .elementor-section.elementor-section-stretched {
			max-width: 100%;
			left: 0 !important;
		}

		.elementor-template-full-width .ast-container {
			display: block;
		}

		@media (max-width:544px) {
			.elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
				width: auto;
				margin: 0;
			}

			.elementor-element .woocommerce .woocommerce-result-count {
				float: none;
			}
		}

		.ast-header-break-point .main-header-bar {
			border-bottom-width: 1px;
		}

		@media (min-width:922px) {
			.main-header-bar {
				border-bottom-width: 1px;
			}
		}

		.main-header-menu .menu-item,
		#astra-footer-menu .menu-item,
		.main-header-bar .ast-masthead-custom-menu-items {
			-js-display: flex;
			display: flex;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-moz-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-moz-box-orient: vertical;
			-moz-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
		}

		.main-header-menu>.menu-item>.menu-link,
		#astra-footer-menu>.menu-item>.menu-link {
			height: 100%;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-js-display: flex;
			display: flex;
		}

		.ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
			top: .2em;
			margin-top: 0px;
			margin-left: 0px;
			width: .65em;
			transform: translate(0, -2px) rotateZ(270deg);
		}

		.ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
			transform: rotateX(180deg);
			overflow-y: auto;
		}

		.ast-separate-container .blog-layout-1,
		.ast-separate-container .blog-layout-2,
		.ast-separate-container .blog-layout-3 {
			background-color: transparent;
			background-image: none;
		}

		.ast-separate-container .ast-article-post {
			background-color: var(--ast-global-color-5);
			;
		}

		@media (max-width:921px) {
			.ast-separate-container .ast-article-post {
				background-color: var(--ast-global-color-5);
				;
			}
		}

		@media (max-width:544px) {
			.ast-separate-container .ast-article-post {
				background-color: var(--ast-global-color-5);
				;
			}
		}

		.ast-separate-container .ast-article-single:not(.ast-related-post),
		.ast-separate-container .comments-area .comment-respond,
		.ast-separate-container .comments-area .ast-comment-list li,
		.ast-separate-container .ast-woocommerce-container,
		.ast-separate-container .error-404,
		.ast-separate-container .no-results,
		.single.ast-separate-container .site-main .ast-author-meta,
		.ast-separate-container .related-posts-title-wrapper,
		.ast-separate-container.ast-two-container #secondary .widget,
		.ast-separate-container .comments-count-wrapper,
		.ast-box-layout.ast-plain-container .site-content,
		.ast-padded-layout.ast-plain-container .site-content,
		.ast-separate-container .comments-area .comments-title,
		.ast-narrow-container .site-content {
			background-color: var(--ast-global-color-5);
			;
		}

		@media (max-width:921px) {

			.ast-separate-container .ast-article-single:not(.ast-related-post),
			.ast-separate-container .comments-area .comment-respond,
			.ast-separate-container .comments-area .ast-comment-list li,
			.ast-separate-container .ast-woocommerce-container,
			.ast-separate-container .error-404,
			.ast-separate-container .no-results,
			.single.ast-separate-container .site-main .ast-author-meta,
			.ast-separate-container .related-posts-title-wrapper,
			.ast-separate-container.ast-two-container #secondary .widget,
			.ast-separate-container .comments-count-wrapper,
			.ast-box-layout.ast-plain-container .site-content,
			.ast-padded-layout.ast-plain-container .site-content,
			.ast-separate-container .comments-area .comments-title,
			.ast-narrow-container .site-content {
				background-color: var(--ast-global-color-5);
				;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-single:not(.ast-related-post),
			.ast-separate-container .comments-area .comment-respond,
			.ast-separate-container .comments-area .ast-comment-list li,
			.ast-separate-container .ast-woocommerce-container,
			.ast-separate-container .error-404,
			.ast-separate-container .no-results,
			.single.ast-separate-container .site-main .ast-author-meta,
			.ast-separate-container .related-posts-title-wrapper,
			.ast-separate-container.ast-two-container #secondary .widget,
			.ast-separate-container .comments-count-wrapper,
			.ast-box-layout.ast-plain-container .site-content,
			.ast-padded-layout.ast-plain-container .site-content,
			.ast-separate-container .comments-area .comments-title,
			.ast-narrow-container .site-content {
				background-color: var(--ast-global-color-5);
				;
			}
		}

		.ast-plain-container,
		.ast-page-builder-template {
			background-color: var(--ast-global-color-5);
			;
		}

		@media (max-width:921px) {

			.ast-plain-container,
			.ast-page-builder-template {
				background-color: var(--ast-global-color-5);
				;
			}
		}

		@media (max-width:544px) {

			.ast-plain-container,
			.ast-page-builder-template {
				background-color: var(--ast-global-color-5);
				;
			}
		}

		.ast-mobile-header-content>*,
		.ast-desktop-header-content>* {
			padding: 10px 0;
			height: auto;
		}

		.ast-mobile-header-content>*:first-child,
		.ast-desktop-header-content>*:first-child {
			padding-top: 10px;
		}

		.ast-mobile-header-content>.ast-builder-menu,
		.ast-desktop-header-content>.ast-builder-menu {
			padding-top: 0;
		}

		.ast-mobile-header-content>*:last-child,
		.ast-desktop-header-content>*:last-child {
			padding-bottom: 0;
		}

		.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,
		.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {
			width: 100%;
		}

		.ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
			transform: rotateX(180deg);
		}

		#ast-desktop-header .ast-desktop-header-content,
		.ast-mobile-header-content .ast-search-icon,
		.ast-desktop-header-content .ast-search-icon,
		.ast-mobile-header-wrap .ast-mobile-header-content,
		.ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,
		.ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {
			display: none;
		}

		.ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,
		.ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {
			display: block;
		}

		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
			opacity: 1;
			visibility: visible;
		}

		.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {
			width: unset;
			margin: unset;
		}

		.ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle,
		.ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
			left: calc(20px - 0.907em);
			right: auto;
		}

		.ast-mobile-header-content .ast-search-menu-icon,
		.ast-mobile-header-content .ast-search-menu-icon.slide-search,
		.ast-desktop-header-content .ast-search-menu-icon,
		.ast-desktop-header-content .ast-search-menu-icon.slide-search {
			width: 100%;
			position: relative;
			display: block;
			right: auto;
			transform: none;
		}

		.ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,
		.ast-mobile-header-content .ast-search-menu-icon .search-form,
		.ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,
		.ast-desktop-header-content .ast-search-menu-icon .search-form {
			right: 0;
			visibility: visible;
			opacity: 1;
			position: relative;
			top: auto;
			transform: none;
			padding: 0;
			display: block;
			overflow: hidden;
		}

		.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,
		.ast-mobile-header-content .ast-search-menu-icon .search-field,
		.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,
		.ast-desktop-header-content .ast-search-menu-icon .search-field {
			width: 100%;
			padding-right: 5.5em;
		}

		.ast-mobile-header-content .ast-search-menu-icon .search-submit,
		.ast-desktop-header-content .ast-search-menu-icon .search-submit {
			display: block;
			position: absolute;
			height: 100%;
			top: 0;
			right: 0;
			padding: 0 1em;
			border-radius: 0;
		}

		.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {
			padding-left: 30px;
		}

		.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
			padding-left: 40px;
		}

		.ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
			background-color: #ffffff;
			;
		}

		.ast-mobile-header-wrap .ast-mobile-header-content,
		.ast-desktop-header-content {
			background-color: #ffffff;
			;
		}

		.ast-mobile-popup-content>*,
		.ast-mobile-header-content>*,
		.ast-desktop-popup-content>*,
		.ast-desktop-header-content>* {
			padding-top: 0;
			padding-bottom: 0;
		}

		.content-align-flex-start .ast-builder-layout-element {
			justify-content: flex-start;
		}

		.content-align-flex-start .main-header-menu {
			text-align: left;
		}

		.ast-mobile-popup-drawer.active .menu-toggle-close {
			color: #3a3a3a;
		}

		.ast-mobile-header-wrap .ast-primary-header-bar,
		.ast-primary-header-bar .site-primary-header-wrap {
			min-height: 80px;
		}

		.ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
			line-height: 80px;
		}

		@media (max-width:921px) {

			#masthead .ast-mobile-header-wrap .ast-primary-header-bar,
			#masthead .ast-mobile-header-wrap .ast-below-header-bar {
				padding-left: 20px;
				padding-right: 20px;
			}
		}

		.ast-header-break-point .ast-primary-header-bar {
			border-bottom-width: 1px;
			border-bottom-color: #eaeaea;
			border-bottom-style: solid;
		}

		@media (min-width:922px) {
			.ast-primary-header-bar {
				border-bottom-width: 1px;
				border-bottom-color: #eaeaea;
				border-bottom-style: solid;
			}
		}

		.ast-primary-header-bar {
			background-color: #ffffff;
			;
		}

		.ast-primary-header-bar {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-primary-header-bar {
				display: grid;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-primary-header-bar {
				display: grid;
			}
		}

		[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
			color: var(--ast-global-color-0);
			border: none;
			background: transparent;
		}

		[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
			width: 20px;
			height: 20px;
			fill: var(--ast-global-color-0);
		}

		[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
			color: var(--ast-global-color-0);
		}

		.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
			top: 0;
		}

		.ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
			content: unset;
		}

		.ast-hfb-header .ast-builder-menu-mobile .main-header-menu,
		.ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
		.ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link {
			border-style: none;
		}

		.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
			top: 0;
		}

		@media (max-width:921px) {
			.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}

			.ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
				content: unset;
			}
		}

		@media (max-width:544px) {
			.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}
		}

		.ast-builder-menu-mobile .main-navigation {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-menu-mobile .main-navigation {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-menu-mobile .main-navigation {
				display: block;
			}
		}

		:root {
			--e-global-color-astglobalcolor0: #0170B9;
			--e-global-color-astglobalcolor1: #3a3a3a;
			--e-global-color-astglobalcolor2: #3a3a3a;
			--e-global-color-astglobalcolor3: #4B4F58;
			--e-global-color-astglobalcolor4: #F5F5F5;
			--e-global-color-astglobalcolor5: #FFFFFF;
			--e-global-color-astglobalcolor6: #E5E5E5;
			--e-global-color-astglobalcolor7: #424242;
			--e-global-color-astglobalcolor8: #000000;
		}
	</style>
	<style id='wp-emoji-styles-inline-css'>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='wp-includes/css/dist/block-library/style.minb6a4.css?ver=6.6.1' media='all' />
	<style id='global-styles-inline-css'>
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
			--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
			--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
			--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
			--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
			--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
			--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
			--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
			--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:root {
			--wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
			--wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
		}

		:where(body) {
			margin: 0;
		}

		.wp-site-blocks>.alignleft {
			float: left;
			margin-right: 2em;
		}

		.wp-site-blocks>.alignright {
			float: right;
			margin-left: 2em;
		}

		.wp-site-blocks>.aligncenter {
			justify-content: center;
			margin-left: auto;
			margin-right: auto;
		}

		:where(.wp-site-blocks)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(.wp-site-blocks)> :first-child {
			margin-block-start: 0;
		}

		:where(.wp-site-blocks)> :last-child {
			margin-block-end: 0;
		}

		:root {
			--wp--style--block-gap: 24px;
		}

		.is-layout-flow> :first-child {
			margin-block-start: 0;
		}

		.is-layout-flow> :last-child {
			margin-block-end: 0;
		}

		.is-layout-flow>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		.is-layout-constrained> :first-child {
			margin-block-start: 0;
		}

		.is-layout-constrained> :last-child {
			margin-block-end: 0;
		}

		.is-layout-constrained>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		.is-layout-flex {
			gap: 24px;
		}

		.is-layout-grid {
			gap: 24px;
		}

		.is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		:root :where(body) {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		a:where(:not(.wp-element-button)) {
			text-decoration: none;
		}

		:root :where(.wp-element-button, .wp-block-button__link) {
			background-color: #32373c;
			border-width: 0;
			color: #fff;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
			padding: calc(0.667em + 2px) calc(1.333em + 2px);
			text-decoration: none;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-color {
			color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-color {
			color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-color {
			color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-color {
			color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-color {
			color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-color {
			color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-color {
			color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-color {
			color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-color {
			color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-background-color {
			background-color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-background-color {
			background-color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-background-color {
			background-color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-background-color {
			background-color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-background-color {
			background-color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-background-color {
			background-color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-background-color {
			background-color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-background-color {
			background-color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-background-color {
			background-color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-border-color {
			border-color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-border-color {
			border-color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-border-color {
			border-color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-border-color {
			border-color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-border-color {
			border-color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-border-color {
			border-color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-border-color {
			border-color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-border-color {
			border-color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-border-color {
			border-color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='elementor-icons-css'
		href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minfc13.css?ver=5.20.0' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='wp-content/plugins/elementor/assets/css/frontend-lite.mindf38.css?ver=3.14.0' media='all' />
	<link rel='stylesheet' id='swiper-css'
		href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='elementor-post-14-css'
		href='wp-content/uploads/elementor/css/post-14c256.css?ver=1704437521' media='all' />
	<link rel='stylesheet' id='elementor-pro-css'
		href='wp-content/plugins/elementor-pro/assets/css/frontend-lite.min991d.css?ver=3.11.2' media='all' />
	<link rel='stylesheet' id='elementor-post-54-css'
		href='wp-content/uploads/elementor/css/post-5446f4.css?ver=1709538985' media='all' />
	<link rel='stylesheet' id='elementor-post-50-css'
		href='wp-content/uploads/elementor/css/post-50c256.css?ver=1704437521' media='all' />
	<link rel='stylesheet' id='elementor-post-52-css'
		href='wp-content/uploads/elementor/css/post-52d265.css?ver=1704438302' media='all' />
	<link rel='stylesheet' id='elementor-icons-ekiticons-css'
		href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons292d.css?ver=2.8.8'
		media='all' />
	<link rel='stylesheet' id='skb-cife-elegant_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant0ba6.css?ver=1.0.6' media='all' />
	<link rel='stylesheet' id='skb-cife-linearicons_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/linearicons0ba6.css?ver=1.0.6'
		media='all' />
	<link rel='stylesheet' id='skb-cife-themify_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify0ba6.css?ver=1.0.6' media='all' />
	<link rel='stylesheet' id='ekit-widget-styles-css'
		href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles292d.css?ver=2.8.8'
		media='all' />
	<link rel='stylesheet' id='ekit-responsive-css'
		href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive292d.css?ver=2.8.8' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Barlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.6.1'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'
		href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css'
		href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-brands-css'
		href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='elementor-icons-skb_cife-themify-icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify0ba6.css?ver=1.0.6' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<!--[if IE]>
<script src="https://protonsalesseremban.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.1.5" id="astra-flexibility-js"></script>
<script id="astra-flexibility-js-after">
flexibility(document.documentElement);
</script>
<![endif]-->
	<script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/54.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.6.1" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="wp-json/oembed/1.0/embedc45b.json?url=https%3A%2F%2Fprotonsalesseremban.com%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed089d?url=https%3A%2F%2Fprotonsalesseremban.com%2F&amp;format=xml" />
	<meta name="generator"
		content="Elementor 3.14.0; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<link rel="icon" href="wp-content/uploads/2023/06/pngwing.com.png" sizes="32x32" />
	<link rel="icon" href="wp-content/uploads/2023/06/pngwing.com.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="wp-content/uploads/2023/06/pngwing.com.png" />
	<meta name="msapplication-TileImage"
		content="pngwing.com.png" />
	<style id="wpforms-css-vars-root">
		:root {
			--wpforms-field-border-radius: 3px;
			--wpforms-field-background-color: #ffffff;
			--wpforms-field-border-color: rgba(0, 0, 0, 0.25);
			--wpforms-field-text-color: rgba(0, 0, 0, 0.7);
			--wpforms-label-color: rgba(0, 0, 0, 0.85);
			--wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
			--wpforms-label-error-color: rgb(54, 211, 214);
			--wpforms-button-border-radius: 3px;
			--wpforms-button-background-color: #066aab;
			--wpforms-button-text-color: #ffffff;
			--wpforms-field-size-input-height: 43px;
			--wpforms-field-size-input-spacing: 15px;
			--wpforms-field-size-font-size: 16px;
			--wpforms-field-size-line-height: 19px;
			--wpforms-field-size-padding-h: 14px;
			--wpforms-field-size-checkbox-size: 16px;
			--wpforms-field-size-sublabel-spacing: 5px;
			--wpforms-field-size-icon-size: 1;
			--wpforms-label-size-font-size: 16px;
			--wpforms-label-size-line-height: 19px;
			--wpforms-label-size-sublabel-font-size: 14px;
			--wpforms-label-size-sublabel-line-height: 17px;
			--wpforms-button-size-font-size: 17px;
			--wpforms-button-size-height: 41px;
			--wpforms-button-size-padding-h: 15px;
			--wpforms-button-size-margin-top: 10px;

		}
	</style>
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope'
	class="home page-template-default page page-id-54 ast-desktop ast-page-builder-template ast-no-sidebar astra-4.1.5 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-kit-14 elementor-page elementor-page-54">

	<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
		Skip to content</a>

	<div class="hfeed site" id="page">
		<div data-elementor-type="header" data-elementor-id="50"
			class="elementor elementor-50 elementor-location-header"
			style="color:white;background-color: #1e2322;">
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-1f020af elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="1f020af" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d07f6e2"
						data-id="d07f6e2" data-element_type="column">
						<div class="elementor-widget-wrap">
						</div>
					</div>
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-77914e9"
						data-id="77914e9" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-00d59d4 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
								data-id="00d59d4" data-element_type="widget" data-widget_type="icon-list.default">
								<div class="elementor-widget-container">
									<link rel="stylesheet"
										href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
									
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div style="color:white;background-color: #1e2322;"
						class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-684c5b6"
						data-id="684c5b6" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-e77ba8e elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
								data-id="e77ba8e" data-element_type="widget" data-widget_type="social-icons.default">
								<div class="elementor-widget-container">
									<style>
										/*! elementor - v3.14.0 - 18-06-2023 */
										.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
										.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
										.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
											line-height: 1;
											font-size: 0
										}

										.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
											display: inline-grid
										}

										.elementor-widget-social-icons .elementor-grid {
											grid-column-gap: var(--grid-column-gap, 5px);
											grid-row-gap: var(--grid-row-gap, 5px);
											grid-template-columns: var(--grid-template-columns);
											justify-content: var(--justify-content, center);
											justify-items: var(--justify-content, center)
										}

										.elementor-icon.elementor-social-icon {
											font-size: var(--icon-size, 25px);
											line-height: var(--icon-size, 25px);
											width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
											height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
										}

										.elementor-social-icon {
											--e-social-icon-icon-color: #fff;
											display: inline-flex;
											background-color: #69727d;
											align-items: center;
											justify-content: center;
											text-align: center;
											cursor: pointer
										}

										.elementor-social-icon i {
											color: var(--e-social-icon-icon-color)
										}

										.elementor-social-icon svg {
											fill: var(--e-social-icon-icon-color)
										}

										.elementor-social-icon:last-child {
											margin: 0
										}

										.elementor-social-icon:hover {
											opacity: .9;
											color: #fff
										}

										.elementor-social-icon-android {
											background-color: #a4c639
										}

										.elementor-social-icon-apple {
											background-color: #999
										}

										.elementor-social-icon-behance {
											background-color: #1769ff
										}

										.elementor-social-icon-bitbucket {
											background-color: #205081
										}

										.elementor-social-icon-codepen {
											background-color: #000
										}

										.elementor-social-icon-delicious {
											background-color: #39f
										}

										.elementor-social-icon-deviantart {
											background-color: #05cc47
										}

										.elementor-social-icon-digg {
											background-color: #005be2
										}

										.elementor-social-icon-dribbble {
											background-color: #ea4c89
										}

										.elementor-social-icon-elementor {
											background-color: #d30c5c
										}

										.elementor-social-icon-envelope {
											background-color: #ea4335
										}

										.elementor-social-icon-facebook,
										.elementor-social-icon-facebook-f {
											background-color: #3b5998
										}

										.elementor-social-icon-flickr {
											background-color: #0063dc
										}

										.elementor-social-icon-foursquare {
											background-color: #2d5be3
										}

										.elementor-social-icon-free-code-camp,
										.elementor-social-icon-freecodecamp {
											background-color: #006400
										}

										.elementor-social-icon-github {
											background-color: #333
										}

										.elementor-social-icon-gitlab {
											background-color: #e24329
										}

										.elementor-social-icon-globe {
											background-color: #69727d
										}

										.elementor-social-icon-google-plus,
										.elementor-social-icon-google-plus-g {
											background-color: #dd4b39
										}

										.elementor-social-icon-houzz {
											background-color: #7ac142
										}

										.elementor-social-icon-instagram {
											background-color: #262626
										}

										.elementor-social-icon-jsfiddle {
											background-color: #487aa2
										}

										.elementor-social-icon-link {
											background-color: #818a91
										}

										.elementor-social-icon-linkedin,
										.elementor-social-icon-linkedin-in {
											background-color: #0077b5
										}

										.elementor-social-icon-medium {
											background-color: #00ab6b
										}

										.elementor-social-icon-meetup {
											background-color: #ec1c40
										}

										.elementor-social-icon-mixcloud {
											background-color: #273a4b
										}

										.elementor-social-icon-odnoklassniki {
											background-color: #f4731c
										}

										.elementor-social-icon-pinterest {
											background-color: #bd081c
										}

										.elementor-social-icon-product-hunt {
											background-color: #da552f
										}

										.elementor-social-icon-reddit {
											background-color: #ff4500
										}

										.elementor-social-icon-rss {
											background-color: #f26522
										}

										.elementor-social-icon-shopping-cart {
											background-color: #4caf50
										}

										.elementor-social-icon-skype {
											background-color: #00aff0
										}

										.elementor-social-icon-slideshare {
											background-color: #0077b5
										}

										.elementor-social-icon-snapchat {
											background-color: #fffc00
										}

										.elementor-social-icon-soundcloud {
											background-color: #f80
										}

										.elementor-social-icon-spotify {
											background-color: #2ebd59
										}

										.elementor-social-icon-stack-overflow {
											background-color: #fe7a15
										}

										.elementor-social-icon-steam {
											background-color: #00adee
										}

										.elementor-social-icon-stumbleupon {
											background-color: #eb4924
										}

										.elementor-social-icon-telegram {
											background-color: #2ca5e0
										}

										.elementor-social-icon-thumb-tack {
											background-color: #1aa1d8
										}

										.elementor-social-icon-tripadvisor {
											background-color: #589442
										}

										.elementor-social-icon-tumblr {
											background-color: #35465c
										}

										.elementor-social-icon-twitch {
											background-color: #6441a5
										}

										.elementor-social-icon-twitter {
											background-color: #1da1f2
										}

										.elementor-social-icon-viber {
											background-color: #665cac
										}

										.elementor-social-icon-vimeo {
											background-color: #1ab7ea
										}

										.elementor-social-icon-vk {
											background-color: #45668e
										}

										.elementor-social-icon-weibo {
											background-color: #dd2430
										}

										.elementor-social-icon-weixin {
											background-color: #31a918
										}

										.elementor-social-icon-whatsapp {
											background-color: #25d366
										}

										.elementor-social-icon-wordpress {
											background-color: #21759b
										}

										.elementor-social-icon-xing {
											background-color: #026466
										}

										.elementor-social-icon-yelp {
											background-color: #af0606
										}

										.elementor-social-icon-youtube {
											background-color: #cd201f
										}

										.elementor-social-icon-500px {
											background-color: #0099e5
										}

										.elementor-shape-rounded .elementor-icon.elementor-social-icon {
											border-radius: 10%
										}

										.elementor-shape-circle .elementor-icon.elementor-social-icon {
											border-radius: 50%
										}
									</style>
									<div class="elementor-social-icons-wrapper elementor-grid">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="color:white;background-color: #1e2322;"
						class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-cde0e0a"
						data-id="cde0e0a" data-element_type="column">
						<div style="color:white;background-color: #1e2322;" class="elementor-widget-wrap">
						</div>
					</div>
				</div>
			</section>
			<section style="color:white;background-color: #1e2322;"
				class="elementor-section elementor-top-section elementor-element elementor-element-155f9ed elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="155f9ed" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
				<div style="color:white;background-color: #1e2322;"
					class="elementor-container elementor-column-gap-default"
					style="color:white;background-color: #1e2322;">
					<div style="color:white;background-color: #1e2322;"
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-de6457e"
						data-id="de6457e" data-element_type="column">
						<div style="color:white;background-color: #1e2322;"
							class="elementor-widget-wrap elementor-element-populated">
							<div style="color:white;background-color: #1e2322;"
								class="elementor-element elementor-element-881a8ea elementor-widget elementor-widget-image"
								data-id="881a8ea" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container" style="color:white;background-color: #1e2322;">
									<style>
										/*! elementor - v3.14.0 - 18-06-2023 */
										.elementor-widget-image {
											text-align: center
										}

										.elementor-widget-image a {
											display: inline-block
										}

										.elementor-widget-image a img[src$=".svg"] {
											width: 48px
										}

										.elementor-widget-image img {
											vertical-align: middle;
											display: inline-block
										}
									</style> <a href="index.html">
										<img width="259" height="52" src="logo.png"
											class="attachment-full size-full wp-image-338" alt="" /> </a>
								</div>
							</div>
						</div>
					</div>
					<div style="color:white;background-color: #1e2322;"
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-14b8015"
						data-id="14b8015" data-element_type="column">
						<div style="color:white;background-color: #1e2322;"
							class="elementor-widget-wrap elementor-element-populated">
							<div style="color:white;background-color: #1e2322;"
								class="elementor-element elementor-element-2306404 elementor-hidden-tablet elementor-widget elementor-widget-ekit-nav-menu"
								data-id="2306404" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
								<div style="color:white;background-color: #1e2322;" class="elementor-widget-container">
									<div style="color:white;background-color: #1e2322;"
										class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon=""
										data-hamburger-icon-type="icon" data-responsive-breakpoint="1024"> <button
											style="color:white;background-color: #1e2322;"
											class="elementskit-menu-hamburger elementskit-menu-toggler" type="button"
											aria-label="hamburger-icon">
											<span style="color:white;background-color: #1e2322;"
												class="elementskit-menu-hamburger-icon"></span><span
												class="elementskit-menu-hamburger-icon"></span><span
												class="elementskit-menu-hamburger-icon"></span>
										</button>
										<div style="color:white;background-color: #1e2322;" id="ekit-megamenu-menu"
											class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-yes ekit-nav-dropdown-hover">
											<ul id="menu-menu"
												class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
												<li id="menu-item-100"
													class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-100 nav-item elementskit-mobile-builder-content active"
													data-vertical-menu=750px><a href="index.html"
														class="ekit-menu-nav-link active menu-link">Main Page</a></li>
												<li id="menu-item-101"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-101 nav-item elementskit-mobile-builder-content"
													data-vertical-menu=750px><a href="#wakil"
														class="ekit-menu-nav-link menu-link">AI Analysis</a></li>
												<li id="menu-item-102"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-102 nav-item elementskit-mobile-builder-content"
													data-vertical-menu=750px><a href="#model"
														class="ekit-menu-nav-link menu-link">Dashboard</a></li>
											</ul>
											<div style="color:white;background-color: #1e2322;"
												class="elementskit-nav-identity-panel">
												<div style="color:white;background-color: #1e2322;"
													class="elementskit-site-title">
													<a style="color:white;background-color: #1e2322;"
														class="elementskit-nav-logo" href="index.html" target="_self"
														rel="">
														<img src="#" title="" alt="" />
													</a>
												</div><button class="elementskit-menu-close elementskit-menu-toggler"
													type="button">X</button>
											</div>
										</div>
										<div
											class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="color:white;background-color: #1e2322;"
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3690ca3"
						data-id="3690ca3" data-element_type="column">
						<div style="color:white;background-color: #1e2322;"
							class="elementor-widget-wrap elementor-element-populated">
							<div style="color:white;background-color: #1e2322;"
								class="elementor-element elementor-element-af492cb elementor-align-center elementor-widget elementor-widget-button"
								data-id="af492cb" data-element_type="widget" data-widget_type="button.default">
								<div style="color:white;background-color: #1e2322;" class="elementor-widget-container">
									<div style="color:white;background-color: #1e2322;"
										class="elementor-button-wrapper">
										<a style="color:white;background-color: gray;"
											class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
											href="">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text" onclick="toggleAutoSubmit()">Freeze Data</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section style="color:white;background-color: #1e2322;"
				class="elementor-section elementor-top-section elementor-element elementor-element-11f308e elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
				data-id="11f308e" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ecf4890"
						data-id="ecf4890" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-ab9ede7 elementor-widget-tablet__width-initial elementor-widget elementor-widget-image"
								data-id="ab9ede7" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img width="300" height="256"
										src="wp-content/uploads/2023/12/proton-logo-51C48B7904-seeklogo.com_.png"
										class="attachment-full size-full wp-image-230" alt="" /> </div>
							</div>
						</div>
					</div>
					<div style="color:white;background-color: #1e2322;"
						class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ab843dd"
						data-id="ab843dd" data-element_type="column">
						<div style="color:white;background-color: #1e2322;"
							class="elementor-widget-wrap elementor-element-populated">
							<div style="color:white;background-color: #1e2322;"
								class="elementor-element elementor-element-fcc3e7f elementor-widget elementor-widget-ekit-nav-menu"
								data-id="fcc3e7f" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
								<div class="elementor-widget-container">
									<div style="color:white;background-color: gray;"
										class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon=""
										data-hamburger-icon-type="icon" data-responsive-breakpoint="1024"> <button
											style="color:white;background-color: gray;"
											class="elementskit-menu-hamburger elementskit-menu-toggler" type="button"
											aria-label="hamburger-icon">
											<span style="color:white;background-color: gray;"
												class="elementskit-menu-hamburger-icon"></span><span
												style="color:white;background-color: gray;"
												class="elementskit-menu-hamburger-icon"></span><span
												class="elementskit-menu-hamburger-icon"></span>
										</button>
										<div style="color:white;background-color: #1e2322;" id="ekit-megamenu-menu"
											class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-yes ekit-nav-dropdown-hover">
											<ul id="menu-menu-1"
												class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
												<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-100 nav-item elementskit-mobile-builder-content active"
													data-vertical-menu=750px><a href="index.html"
														class="ekit-menu-nav-link active menu-link">Utama</a></li>
												<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-101 nav-item elementskit-mobile-builder-content"
													data-vertical-menu=750px><a href="#wakil"
														class="ekit-menu-nav-link menu-link">Status</a></li>
												<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-102 nav-item elementskit-mobile-builder-content"
													data-vertical-menu=750px><a href="#model"
														class="ekit-menu-nav-link menu-link">Dashboard</a></li>
												<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104 nav-item elementskit-mobile-builder-content"
													data-vertical-menu=750px><a href="#galeri"
														class="ekit-menu-nav-link menu-link">AI Recommendations</a></li>
											</ul>
											<div style="color:white;background-color: #1e2322;"
												class="elementskit-nav-identity-panel">
												<div class="elementskit-site-title">
													<a class="elementskit-nav-logo" href="index.html" target="_self"
														rel="">
														<img width="259" height="52" src="logo.png"
															class="attachment-full size-full" alt="" decoding="async" />
													</a>
												</div><button class="elementskit-menu-close elementskit-menu-toggler"
													style="color:white;background-color: gray;" type="button">X</button>
											</div>
										</div>
										<div
											class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div id="content" class="site-content">
			<div class="ast-container">


				<div id="primary" class="content-area primary">


					<main id="main" class="site-main">
						<article class="post-54 page type-page status-publish has-post-thumbnail ast-article-single"
							id="post-54" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


							<header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
							</header> <!-- .entry-header -->


							<div class="entry-content clear" itemprop="text">


								<div data-elementor-type="wp-page" data-elementor-id="54"
									class="elementor elementor-54">
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-32549e3 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
										data-id="32549e3" data-element_type="section">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e11fd6b"
												data-id="e11fd6b" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-1d61e83 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides"
														data-id="1d61e83" data-element_type="widget"
														data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}"
														data-widget_type="slides.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor-pro - v3.11.2 - 22-02-2023 */
																.elementor-slides .swiper-slide-bg {
																	background-size: cover;
																	background-position: 50%;
																	background-repeat: no-repeat;
																	min-width: 100%;
																	min-height: 100%
																}

																.elementor-slides .swiper-slide-inner {
																	background-repeat: no-repeat;
																	background-position: 50%;
																	position: absolute;
																	top: 0;
																	left: 0;
																	bottom: 0;
																	right: 0;
																	padding: 50px;
																	margin: auto
																}

																.elementor-slides .swiper-slide-inner,
																.elementor-slides .swiper-slide-inner:hover {
																	color: #fff;
																	display: flex
																}

																.elementor-slides .swiper-slide-inner .elementor-background-overlay {
																	position: absolute;
																	z-index: 0;
																	top: 0;
																	bottom: 0;
																	left: 0;
																	right: 0
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-content {
																	position: relative;
																	z-index: 1;
																	width: 100%
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-heading {
																	font-size: 35px;
																	font-weight: 700;
																	line-height: 1
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-description {
																	font-size: 17px;
																	line-height: 1.4
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),
																.elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
																	margin-bottom: 30px
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-button {
																	border: 2px solid #fff;
																	color: #fff;
																	background: transparent;
																	display: inline-block
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-button,
																.elementor-slides .swiper-slide-inner .elementor-slide-button:hover {
																	background: transparent;
																	color: inherit;
																	text-decoration: none
																}

																.elementor--v-position-top .swiper-slide-inner {
																	align-items: flex-start
																}

																.elementor--v-position-bottom .swiper-slide-inner {
																	align-items: flex-end
																}

																.elementor--v-position-middle .swiper-slide-inner {
																	align-items: center
																}

																.elementor--h-position-left .swiper-slide-inner {
																	justify-content: flex-start
																}

																.elementor--h-position-right .swiper-slide-inner {
																	justify-content: flex-end
																}

																.elementor--h-position-center .swiper-slide-inner {
																	justify-content: center
																}

																body.rtl .elementor-widget-slides .elementor-swiper-button-next {
																	left: 10px;
																	right: auto
																}

																body.rtl .elementor-widget-slides .elementor-swiper-button-prev {
																	right: 10px;
																	left: auto
																}

																.elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner {
																	display: none
																}

																@media (max-width:767px) {
																	.elementor-slides .swiper-slide-inner {
																		padding: 30px
																	}

																	.elementor-slides .swiper-slide-inner .elementor-slide-heading {
																		font-size: 23px;
																		line-height: 1;
																		margin-bottom: 15px
																	}

																	.elementor-slides .swiper-slide-inner .elementor-slide-description {
																		font-size: 13px;
																		line-height: 1.4;
																		margin-bottom: 15px
																	}
																}
															</style>
															<div class="elementor-swiper">
																<div class="elementor-slides-wrapper elementor-main-swiper swiper"
																	dir="ltr" data-animation="fadeInUp">
																	<img src="banner.png">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section style="color:white;background-color: #254646;"
										class="elementor-section elementor-top-section elementor-element elementor-element-741cf8ce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="741cf8ce" data-element_type="section">
										<div class="elementor-background-overlay"></div>
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-57bfaa47"
												data-id="57bfaa47" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<section
														class="elementor-section elementor-inner-section elementor-element elementor-element-38ce1586 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="38ce1586" data-element_type="section" id="wakil">

														<div class="elementor-container elementor-column-gap-default">

															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1023357"
																data-id="1023357" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">

																	<div class="elementor-element elementor-element-4e99337 elementor-widget elementor-widget-heading"
																		data-id="4e99337" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<style>
																				/*! elementor - v3.14.0 - 18-06-2023 */
																				.elementor-heading-title {
																					padding: 0;
																					margin: 0;
																					line-height: 1
																				}

																				.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
																					color: inherit;
																					font-size: inherit;
																					line-height: inherit
																				}

																				.elementor-widget-heading .elementor-heading-title.elementor-size-small {
																					font-size: 15px
																				}

																				.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
																					font-size: 19px
																				}

																				.elementor-widget-heading .elementor-heading-title.elementor-size-large {
																					font-size: 29px
																				}

																				.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
																					font-size: 39px
																				}

																				.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
																					font-size: 59px
																				}
																			</style>
																			<h2
																				class="elementor-heading-title elementor-size-default">
																				AI Assistant</h2>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-9929b17 elementor-widget elementor-widget-heading"
																		data-id="9929b17" data-element_type="widget"
																		data-widget_type="heading.default">

																		<div class="elementor-widget-container">
																			<h2 class="elementor-heading-title elementor-size-default"
																				style="color:white;">One-Click Analysis
																				</h2>
																			<p id="analysisResult">
																			<script>
    // Function to extract table data
    function getTableData() {
      const table = document.getElementById('garbageTable');
      const rows = table.getElementsByTagName('tr');
      const data = [];

      for (let i = 1; i < rows.length; i++) { // Skip header row
        const cells = rows[i].getElementsByTagName('td');
        const rowData = {
          binId: cells[0].innerText,
          binName: cells[1].innerText,
          binLocation: cells[2].innerText,
          fillLevel: cells[3].innerText,
          lastCleared: cells[4].innerText,
          lastFull: cells[5].innerText
        };
        data.push(rowData);
      }

      return data;
    }

    // Function to send data to Gemini API
    async function analyzeData() {
      const tableData = getTableData();
      const analysisResultDiv = document.getElementById('analysisResult');

      // Prepare the prompt for Gemini
      const prompt = `Analyze the following garbage collection data and provide short insights in one sentence for each question:
${JSON.stringify(tableData, null, 2)}

Key questions:
1. Which bins are most frequently full?
2. Are there any bins that are rarely used?
3. Suggest improvements for the garbage collection system.`;

      // Call Gemini API
      const response = await callGeminiAPI(prompt);

      // Display the analysis result
      analysisResultDiv.innerHTML = `<p><strong>Gemini Analysis:</strong> ${response}</p>`;
    }

    // Function to call Gemini API
    async function callGeminiAPI(prompt) {
      const apiKey = 'AIzaSyCQwNDUE-F6TqtuA4f5W5k7Wls3Rht30DI'; // Replace with your actual Gemini API key
      const endpoint = `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${apiKey}`; // Gemini API endpoint

      try {
        const response = await fetch(endpoint, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            contents: [
              {
                parts: [
                  {
                    text: prompt
                  }
                ]
              }
            ]
          })
        });

        const data = await response.json();
        // Extract the response text from Gemini's API response
        return data.candidates[0].content.parts[0].text.trim();
      } catch (error) {
        console.error('Error calling Gemini API:', error);
        return "Sorry, I couldn't process your request.";
      }
    }
</script></p>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-70b3922f elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
																		data-id="70b3922f" data-element_type="widget"
																		data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<style>
																				/*! elementor - v3.14.0 - 18-06-2023 */
																				.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
																					background-color: #69727d;
																					color: #fff
																				}

																				.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
																					color: #69727d;
																					border: 3px solid;
																					background-color: transparent
																				}

																				.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
																					margin-top: 8px
																				}

																				.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
																					width: 1em;
																					height: 1em
																				}

																				.elementor-widget-text-editor .elementor-drop-cap {
																					float: left;
																					text-align: center;
																					line-height: 1;
																					font-size: 50px
																				}

																				.elementor-widget-text-editor .elementor-drop-cap-letter {
																					display: inline-block
																				}
																			</style>
																			<p><button onclick="analyzeData()">Analyze Data with AI</button>


																			<p></p>


																			
																		</div>
																		</p>
																	</div>
																</div>
															</div>
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2109581c"
																data-id="2109581c" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-6206c0e elementor-widget elementor-widget-image"
																		data-id="6206c0e" data-element_type="widget"
																		data-widget_type="image.default">
																		
																	</div>
																	<div class="elementor-element elementor-element-72d75d34 elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																		data-id="72d75d34" data-element_type="widget"
																		data-widget_type="divider.default">
																		<div class="elementor-widget-container">
																			<style>
																				/*! elementor - v3.14.0 - 18-06-2023 */
																				.elementor-widget-divider {
																					--divider-border-style: none;
																					--divider-border-width: 1px;
																					--divider-color: #0c0d0e;
																					--divider-icon-size: 20px;
																					--divider-element-spacing: 10px;
																					--divider-pattern-height: 24px;
																					--divider-pattern-size: 20px;
																					--divider-pattern-url: none;
																					--divider-pattern-repeat: repeat-x
																				}

																				.elementor-widget-divider .elementor-divider {
																					display: flex
																				}

																				.elementor-widget-divider .elementor-divider__text {
																					font-size: 15px;
																					line-height: 1;
																					max-width: 95%
																				}

																				.elementor-widget-divider .elementor-divider__element {
																					margin: 0 var(--divider-element-spacing);
																					flex-shrink: 0
																				}

																				.elementor-widget-divider .elementor-icon {
																					font-size: var(--divider-icon-size)
																				}

																				.elementor-widget-divider .elementor-divider-separator {
																					display: flex;
																					margin: 0;
																					direction: ltr
																				}

																				.elementor-widget-divider--view-line_icon .elementor-divider-separator,
																				.elementor-widget-divider--view-line_text .elementor-divider-separator {
																					align-items: center
																				}

																				.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
																				.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
																				.elementor-widget-divider--view-line_text .elementor-divider-separator:after,
																				.elementor-widget-divider--view-line_text .elementor-divider-separator:before {
																					display: block;
																					content: "";
																					border-bottom: 0;
																					flex-grow: 1;
																					border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
																				}

																				.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
																					flex-grow: 0;
																					flex-shrink: 100
																				}

																				.elementor-widget-divider--element-align-left .elementor-divider-separator:before {
																					content: none
																				}

																				.elementor-widget-divider--element-align-left .elementor-divider__element {
																					margin-left: 0
																				}

																				.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
																					flex-grow: 0;
																					flex-shrink: 100
																				}

																				.elementor-widget-divider--element-align-right .elementor-divider-separator:after {
																					content: none
																				}

																				.elementor-widget-divider--element-align-right .elementor-divider__element {
																					margin-right: 0
																				}

																				.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
																					border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
																				}

																				.elementor-widget-divider--separator-type-pattern {
																					--divider-border-style: none
																				}

																				.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
																				.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
																				.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
																				.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
																					width: 100%;
																					min-height: var(--divider-pattern-height);
																					-webkit-mask-size: var(--divider-pattern-size) 100%;
																					mask-size: var(--divider-pattern-size) 100%;
																					-webkit-mask-repeat: var(--divider-pattern-repeat);
																					mask-repeat: var(--divider-pattern-repeat);
																					background-color: var(--divider-color);
																					-webkit-mask-image: var(--divider-pattern-url);
																					mask-image: var(--divider-pattern-url)
																				}

																				.elementor-widget-divider--no-spacing {
																					--divider-pattern-size: auto
																				}

																				.elementor-widget-divider--bg-round {
																					--divider-pattern-repeat: round
																				}

																				.rtl .elementor-widget-divider .elementor-divider__text {
																					direction: rtl
																				}

																				.e-con-inner>.elementor-widget-divider,
																				.e-con>.elementor-widget-divider {
																					width: var(--container-widget-width, 100%);
																					--flex-grow: var(--container-widget-flex-grow)
																				}
																			</style>
																			<div class="elementor-divider"
																				style="--divider-pattern-url: url(_data_image/svg%2bxml%2c_svg%20xmlns%3dhttp_/www.w3.org/2000/svg%20preserveAspectRatio%3dnone%20overflow%3dvisible%20h/__/svg_.html);">
																				<span
																					class="elementor-divider-separator">
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
										</div>
									</section>
									<section style="color:white;background-color: #1e2322;"
										class="elementor-section elementor-top-section elementor-element elementor-element-357e1be9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="357e1be9" data-element_type="section">
										<div style="color:white;background-color: #1e2322;"
											class="elementor-container elementor-column-gap-default">
											<div style="color:white;background-color: #1e2322;"
												class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3c0252c"
												data-id="3c0252c" data-element_type="column">
												<div style="color:white;background-color: #1e2322;"
													class="elementor-widget-wrap elementor-element-populated">
													<section style="color:white;background-color: #1e2322;"
														class="elementor-section elementor-inner-section elementor-element elementor-element-50f86126 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="50f86126" data-element_type="section">
														<div style="color:white;background-color: #1e2322;"
															class="elementor-container elementor-column-gap-no">
															<div style="color:white;background-color: #1e2322;"
																class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-595a3c1e"
																data-id="595a3c1e" data-element_type="column"
																data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div style="color:white;background-color: #1e2322;"
																	class="elementor-widget-wrap elementor-element-populated">
																	<div style="color:white;background-color: #1e2322;"
																		class="elementor-element elementor-element-33334302 elementor-widget__width-auto elementor-widget elementor-widget-counter"
																		data-id="33334302" data-element_type="widget"
																		data-widget_type="counter.default">
																		<div style="color:white;background-color: #1e2322;"
																			class="elementor-widget-container">
																			<style>
																				/*! elementor - v3.14.0 - 18-06-2023 */
																				.elementor-counter .elementor-counter-number-wrapper {
																					display: flex;
																					font-size: 69px;
																					font-weight: 600;
																					line-height: 1
																				}

																				.elementor-counter .elementor-counter-number-prefix,
																				.elementor-counter .elementor-counter-number-suffix {
																					flex-grow: 1;
																					white-space: pre-wrap
																				}

																				.elementor-counter .elementor-counter-number-prefix {
																					text-align: right
																				}

																				.elementor-counter .elementor-counter-number-suffix {
																					text-align: left
																				}

																				.elementor-counter .elementor-counter-title {
																					text-align: center;
																					font-size: 19px;
																					font-weight: 400;
																					line-height: 2.5
																				}
																			</style>
																			<div class="elementor-counter">
																				<div style="color:white;background-color: #1e2322;"
																					class="elementor-counter-number-wrapper">
																					<span
																						class="elementor-counter-number-prefix"></span>
																				
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div style="color:white;background-color: #1e2322;"
																class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-32cdb004"
																data-id="32cdb004" data-element_type="column">
																<div style="color:white;background-color: #1e2322;"
																	class="elementor-widget-wrap elementor-element-populated">
																	<div style="color:white;background-color: #1e2322;"
																		class="elementor-element elementor-element-22125ab4 elementor-widget elementor-widget-heading"
																		data-id="22125ab4" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h2 style="color:white;background-color: #1e2322;"
																				class="elementor-heading-title elementor-size-default">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
											<div style="color:white;background-color: #1e2322;"
												class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-33f33e5"
												data-id="33f33e5" data-element_type="column">
												<div style="color:white;background-color: #1e2322;"
													class="elementor-widget-wrap elementor-element-populated">
													<section style="color:white;background-color: #1e2322;"
														class="elementor-section elementor-inner-section elementor-element elementor-element-29518cfd elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="29518cfd" data-element_type="section">
														<div style="color:white;background-color: #1e2322;"
															class="elementor-container elementor-column-gap-no">
															<div style="color:white;background-color: #1e2322;"
																class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-135848f8"
																data-id="135848f8" data-element_type="column"
																data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div style="color:white;background-color: #1e2322;"
																	class="elementor-widget-wrap elementor-element-populated">
																	<div style="color:white;background-color: #1e2322;"
																		class="elementor-element elementor-element-6e918277 elementor-widget__width-auto elementor-widget elementor-widget-counter"
																		data-id="6e918277" data-element_type="widget"
																		data-widget_type="counter.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-counter">
																				<div style="color:white;background-color: #1e2322;"
																					class="elementor-counter-number-wrapper">
																					<span
																						class="elementor-counter-number-prefix"></span>
																					<span
																						class="elementor-counter-number"
																						data-duration="2000"
																						data-to-value="100"
																						data-from-value="0"
																						data-delimiter=","><?php
																						
																						$latestDateSql = "SELECT bin_id FROM collection ORDER BY last_cleared DESC LIMIT 1";
																						$latestResult = $con->query($latestDateSql);
																						$latestRow = $latestResult->fetch_assoc();
																						$latestDate = $latestRow['bin_id'];
																						echo htmlspecialchars($latestDate);
																						?>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3096ab16"
																data-id="3096ab16" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-5391c900 elementor-widget elementor-widget-heading"
																		data-id="5391c900" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h2
																				class="elementor-heading-title elementor-size-default">
																				Last Bin Cleared</h2>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
											<div style="color:white;background-color: #1e2322;"
												class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5880db48"
												data-id="5880db48" data-element_type="column">
												<div style="color:white;background-color: #1e2322;"
													class="elementor-widget-wrap elementor-element-populated">
													<section style="color:white;background-color: #1e2322;"
														class="elementor-section elementor-inner-section elementor-element elementor-element-5ab6e091 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="5ab6e091" data-element_type="section">
														<div style="color:white;background-color: #1e2322;"
															class="elementor-container elementor-column-gap-no">
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7833a5b6"
																data-id="7833a5b6" data-element_type="column"
																data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div style="color:white;background-color: #1e2322;"
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-3c8cdad7 elementor-widget__width-auto elementor-widget elementor-widget-counter"
																		data-id="3c8cdad7" data-element_type="widget"
																		data-widget_type="counter.default">
																		<div style="color:white;background-color: #1e2322;"
																			class="elementor-widget-container">
																			<div class="elementor-counter">
																				<div style="color:white;background-color: #1e2322;"
																					class="elementor-counter-number-wrapper">
																					<span
																						class="elementor-counter-number-prefix"></span>
																					<span
																						class="elementor-counter-number"
																						data-duration="2000"
																						data-to-value="96"
																						data-from-value="0"
																						data-delimiter=","><?php
																						
																						$latestDateSql = "SELECT ROUND(AVG(fill_level), 0) AS fill FROM collection";
																						$latestResult = $con->query($latestDateSql);
																						$latestRow = $latestResult->fetch_assoc();
																						$latestDate = $latestRow['fill'];
																						echo htmlspecialchars($latestDate);
																						?></span>
																					<span
																						class="elementor-counter-number-suffix">%</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-13aa7008"
																data-id="13aa7008" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-633ea922 elementor-widget elementor-widget-heading"
																		data-id="633ea922" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h2
																				class="elementor-heading-title elementor-size-default">
																				Average Fill Level</h2>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
											<div style="color:white;background-color: #1e2322;"
												class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7f9413da"
												data-id="7f9413da" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<section style="color:white;background-color: #1e2322;"
														class="elementor-section elementor-inner-section elementor-element elementor-element-509298ff elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="509298ff" data-element_type="section">
														<div class="elementor-container elementor-column-gap-no">
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1562d2e6"
																data-id="1562d2e6" data-element_type="column"
																data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div style="color:white;background-color: #1e2322;"
																	class="elementor-widget-wrap elementor-element-populated">
																	<div style="color:white;background-color: #1e2322;"
																		class="elementor-element elementor-element-32d0a85e elementor-widget__width-auto elementor-widget elementor-widget-counter"
																		data-id="32d0a85e" data-element_type="widget"
																		data-widget_type="counter.default">
																		<div style="color:white;background-color: #1e2322;"
																			class="elementor-widget-container">
																			<div class="elementor-counter">
																				<div style="color:white;background-color: #1e2322;"
																					class="elementor-counter-number-wrapper">
																					
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
													</section>
												</div>
											</div>
										</div>
										<section
											class="elementor-section elementor-top-section elementor-element elementor-element-1a208dc9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
											data-id="1a208dc9" data-element_type="section" id="default">
											<div class="elementor-container elementor-column-gap-default">

												<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29662eaf"
													data-id="29662eaf" data-element_type="column">

													<div class="elementor-widget-wrap elementor-element-populated">

														<section
															class="elementor-section elementor-inner-section elementor-element elementor-element-39feadbf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
															data-id="39feadbf" data-element_type="section" id="model">

															<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-78d005f8"
																data-id="78d005f8" data-element_type="column">

																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-5c54ace0 elementor-invisible elementor-widget elementor-widget-heading"
																		data-id="5c54ace0" data-element_type="widget"
																		data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
																		<script>
        let autoSubmitTimeout; // Variable to store the timeout ID
        let isAutoSubmitEnabled = false; // Flag to track auto-submit state

        // Function to auto-submit the form
        function autoSubmitForm() {
            document.getElementById("autoSubmitForm").submit();
        }

        // Function to start auto-submit
        function startAutoSubmit() {
            if (!isAutoSubmitEnabled) {
                autoSubmitTimeout = setTimeout(autoSubmitForm, 30000); // 30-second delay
                isAutoSubmitEnabled = true;
                document.getElementById("toggleButton").textContent = "Stop Auto-Submit";
                console.log("Auto-submit started.");
            }
        }

        // Function to stop auto-submit
        function stopAutoSubmit() {
            if (isAutoSubmitEnabled) {
                clearTimeout(autoSubmitTimeout); // Clear the timeout
                isAutoSubmitEnabled = false;
                document.getElementById("toggleButton").textContent = "Start Auto-Submit";
                console.log("Auto-submit stopped.");
            }
        }

        // Function to toggle auto-submit on and off
        function toggleAutoSubmit() {
            if (isAutoSubmitEnabled) {
                stopAutoSubmit();
            } else {
                startAutoSubmit();
            }
        }
		window.location.hash = "default";
        // Attach the startAutoSubmit function to the window's load event
        window.onload = function () {
            startAutoSubmit(); // Start auto-submit when the page loads
        };
    </script>
	
																		<form action="" id="autoSubmitForm" method="POST">
																			<!-- Hidden input field for the file path or identifier -->
																			<input type="hidden" name="file_path" value="arduino_data.txt">



																		</form>
																		<?php
                                                            

																		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
																			// Retrieve form data
																			$file_path = $_POST['file_path'];
																		
																			// Validate the file path (ensure it exists and is safe to use)
																			if (file_exists($file_path)) {
																				// Process the file (e.g., read, move, or use it)
																				$file_content = file_get_contents($file_path);
																				$content = htmlspecialchars($file_content);
																				$currentDateTime = htmlspecialchars(date('Y-m-d H:i:s'));
																		        if ($file_content>=90) {
																					$sqlup = "UPDATE `collection` SET `fill_level` = '$content',`last_full` = '$currentDateTime' WHERE `bin_id` = 'bin_1'";
																				}
																				elseif ($file_content<=25) {																				
																					$sqlup = "UPDATE `collection` SET `fill_level` = '$content',`last_cleared` = '$currentDateTime' WHERE `bin_id` = 'bin_1'";
																				}
																				else {
																				$sqlup = "UPDATE `collection` SET `fill_level` = '$content' WHERE `bin_id` = 'bin_1'";
																				}
																				$res = mysqli_query($con, $sqlup);
																			} else {
																				echo "File not found!";
																			}
																		}
																		$sql = "SELECT * FROM collection";
																		$re = mysqli_query($con,$sql);
																		?>
																		<div class="panel-body">
																			<div class="table-responsive">
																				<table
																					class="table table-striped table-bordered table-hover"
																					id="garbageTable">
																					<thead>
																						<tr>
																							<th>Bin ID</th>
																							<th>Bin Name</th>
																							<th>Bin Location</th>
																							<th>Fill Level (%)</th>
																							<th>Last Cleared</th>
																							<th>Last Full</th>


																						</tr>
																					</thead>
																					<tbody>
																						
																						<?php
									
																			while($row= mysqli_fetch_array($re))
																			{
																					echo "<tr class=odd gradeX>
																					<td>".$row['bin_id']."</td>
																						<td>".$row['bin_name']."</td>
																						<td>".$row['bin_location']."</td>
																						<td>".$row['fill_level']."%</td>
																						<td>".$row['last_cleared']."</td>
																						<td>".$row['last_full']."</td>
									
									
																					</tr>";
									
																			}
																		?>
																						<div
																							class="elementor-widget-container">

																							<h2
																								class="elementor-heading-title elementor-size-default">
																								Overall Status
																							</h2>
																						</div>
																			</div>
																			<div class="elementor-element elementor-element-7ad2604c elementor-widget elementor-widget-heading"
																				data-id="7ad2604c"
																				data-element_type="widget"
																				data-widget_type="heading.default">
																				<div class="elementor-widget-container">



																				</div>
																			</div>
																		</div>
																	</div>
																</div>
														</section>






						</article><!-- #post-## -->

					</main><!-- #main -->


				</div><!-- #primary -->


			</div> <!-- ast-container -->
		</div><!-- #content -->
		<div data-elementor-type="footer" data-elementor-id="52"
			class="elementor elementor-52 elementor-location-footer">


		</div>
	</div><!-- #page -->
	<link rel='stylesheet' id='elementor-gallery-css'
		href='wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0' media='all' />
	<link rel='stylesheet' id='e-animations-css'
		href='wp-content/plugins/elementor/assets/lib/animations/animations.mindf38.css?ver=3.14.0' media='all' />
	<script id="astra-theme-js-js-extra">
		var astra = {
			"break_point": "921",
			"isRtl": "",
			"is_scroll_to_id": "",
			"is_scroll_to_top": "",
			"is_header_footer_builder_active": "1"
		};
	</script>
	<script src="wp-content/themes/astra/assets/js/minified/frontend.min31a4.js?ver=4.1.5" id="astra-theme-js-js">
	</script>
	<script src="wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script292d.js?ver=2.8.8"
		id="elementskit-framework-js-frontend-js"></script>
	<script id="elementskit-framework-js-frontend-js-after">
		var elementskit = {
			resturl: 'https://protonsalesseremban.com/wp-json/elementskit/v1/',
		}
	</script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts292d.js?ver=2.8.8"
		id="ekit-widget-scripts-js"></script>
	<script src="wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
	<script src="wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1"
		id="jquery-numerator-js"></script>
	<script src="wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0"
		id="elementor-gallery-js"></script>
	<script src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min991d.js?ver=3.11.2"
		id="elementor-pro-webpack-runtime-js"></script>
	<script src="wp-content/plugins/elementor/assets/js/webpack.runtime.mindf38.js?ver=3.14.0"
		id="elementor-webpack-runtime-js"></script>
	<script src="wp-content/plugins/elementor/assets/js/frontend-modules.mindf38.js?ver=3.14.0"
		id="elementor-frontend-modules-js"></script>
	<script src="wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
	<script src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
	<script id="wp-i18n-js-after">
		wp.i18n.setLocaleData({
			'text direction\u0004ltr': ['ltr']
		});
	</script>
	<script id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = {
			"ajaxurl": "https:\/\/protonsalesseremban.com\/wp-admin\/admin-ajax.php",
			"nonce": "3d036789a4",
			"urls": {
				"assets": "https:\/\/protonsalesseremban.com\/wp-content\/plugins\/elementor-pro\/assets\/",
				"rest": "https:\/\/protonsalesseremban.com\/wp-json\/"
			},
			"shareButtonsNetworks": {
				"facebook": {
					"title": "Facebook",
					"has_counter": true
				},
				"twitter": {
					"title": "Twitter"
				},
				"linkedin": {
					"title": "LinkedIn",
					"has_counter": true
				},
				"pinterest": {
					"title": "Pinterest",
					"has_counter": true
				},
				"reddit": {
					"title": "Reddit",
					"has_counter": true
				},
				"vk": {
					"title": "VK",
					"has_counter": true
				},
				"odnoklassniki": {
					"title": "OK",
					"has_counter": true
				},
				"tumblr": {
					"title": "Tumblr"
				},
				"digg": {
					"title": "Digg"
				},
				"skype": {
					"title": "Skype"
				},
				"stumbleupon": {
					"title": "StumbleUpon",
					"has_counter": true
				},
				"mix": {
					"title": "Mix"
				},
				"telegram": {
					"title": "Telegram"
				},
				"pocket": {
					"title": "Pocket",
					"has_counter": true
				},
				"xing": {
					"title": "XING",
					"has_counter": true
				},
				"whatsapp": {
					"title": "WhatsApp"
				},
				"email": {
					"title": "Email"
				},
				"print": {
					"title": "Print"
				}
			},
			"facebook_sdk": {
				"lang": "en_US",
				"app_id": ""
			},
			"lottie": {
				"defaultAnimationUrl": "https:\/\/protonsalesseremban.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
			}
		};
	</script>
	<script src="wp-content/plugins/elementor-pro/assets/js/frontend.min991d.js?ver=3.11.2"
		id="elementor-pro-frontend-js"></script>
	<script src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
		id="elementor-waypoints-js"></script>
	<script src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close",
				"a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
				"a11yCarouselPrevSlideMessage": "Previous slide",
				"a11yCarouselNextSlideMessage": "Next slide",
				"a11yCarouselFirstSlideMessage": "This is the first slide",
				"a11yCarouselLastSlideMessage": "This is the last slide",
				"a11yCarouselPaginationBulletMessage": "Go to slide"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Mobile Portrait",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Landscape",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet Portrait",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Landscape",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.14.0",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"e_optimized_assets_loading": true,
				"e_optimized_css_loading": true,
				"a11y_improvements": true,
				"additional_custom_breakpoints": true,
				"e_swiper_latest": true,
				"theme_builder_v2": true,
				"landing-pages": true,
				"page-transitions": true,
				"notes": true,
				"loop": true,
				"form-submissions": true,
				"e_scroll_snap": true
			},
			"urls": {
				"assets": "https:\/\/protonsalesseremban.com\/wp-content\/plugins\/elementor\/assets\/"
			},
			"swiperClass": "swiper",
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 54,
				"title": "Proton%20Sales%20Seremban%20-%20Penasihat%20Jualan%20Proton%20di%20Seremban",
				"excerpt": "",
				"featuredImage": "https:\/\/protonsalesseremban.com\/wp-content\/uploads\/2024\/02\/seo-protonsalesseremban.png"
			}
		};
	</script>
	<script src="wp-content/plugins/elementor/assets/js/frontend.mindf38.js?ver=3.14.0" id="elementor-frontend-js">
	</script>
	<script src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min991d.js?ver=3.11.2"
		id="pro-elements-handlers-js"></script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle292d.js?ver=2.8.8"
		id="animate-circle-js"></script>
	<script id="elementskit-elementor-js-extra">
		var ekit_config = {
			"ajaxurl": "https:\/\/protonsalesseremban.com\/wp-admin\/admin-ajax.php",
			"nonce": "29b3510d36"
		};
	</script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor292d.js?ver=2.8.8"
		id="elementskit-elementor-js"></script>
	<script src="wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min991d.js?ver=3.11.2"
		id="e-sticky-js"></script>
	<script src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
	<script id="wp-util-js-extra">
		var _wpUtilSettings = {
			"ajax": {
				"url": "\/wp-admin\/admin-ajax.php"
			}
		};
	</script>
	<script src="wp-includes/js/wp-util.minb6a4.js?ver=6.6.1" id="wp-util-js"></script>
	<script id="wpforms-elementor-js-extra">
		var wpformsElementorVars = {
			"captcha_provider": "recaptcha",
			"recaptcha_type": "v2"
		};
	</script>
	<script src="wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.mine6a2.js?ver=1.8.2.1"
		id="wpforms-elementor-js"></script>
	<script>
		/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
			.addEventListener("hashchange", function () {
				var t, e = location.hash.substring(1);
				/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i
					.test(t.tagName) || (t.tabIndex = -1), t.focus())
			}, !1);
	</script>
</body>

</html>
