<link rel="stylesheet" href="{{ asset('template/app/css/fontawesome.min.css') }}">

<script>
    window._wca = window._wca || [];
</script>

<script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/hugostore.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"
        }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode,
                e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                        55356, 56826, 55356, 56819
                    ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                        56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                    ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                        56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                    ]);
                case "emoji":
                    return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
</script>
<script src="template/app/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
<style type="text/css">
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
<link rel="stylesheet" id="wp-block-library-css" href="{{ asset('template/app/css/style.min.css') }}" type="text/css"
    media="all">
<style id="wp-block-library-inline-css" type="text/css">
    .has-text-align-justify {
        text-align: justify;
    }
</style>
<style id="wp-block-library-theme-inline-css" type="text/css">
    .wp-block-audio figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-audio figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-audio {
        margin: 0 0 1em
    }

    .wp-block-code {
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: Menlo, Consolas, monaco, monospace;
        padding: .8em 1em
    }

    .wp-block-embed figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-embed figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-embed {
        margin: 0 0 1em
    }

    .blocks-gallery-caption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-image figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image {
        margin: 0 0 1em
    }

    .wp-block-pullquote {
        border-top: 4px solid;
        border-bottom: 4px solid;
        margin-bottom: 1.75em;
        color: currentColor
    }

    .wp-block-pullquote__citation,
    .wp-block-pullquote cite,
    .wp-block-pullquote footer {
        color: currentColor;
        text-transform: uppercase;
        font-size: .8125em;
        font-style: normal
    }

    .wp-block-quote {
        border-left: .25em solid;
        margin: 0 0 1.75em;
        padding-left: 1em
    }

    .wp-block-quote cite,
    .wp-block-quote footer {
        color: currentColor;
        font-size: .8125em;
        position: relative;
        font-style: normal
    }

    .wp-block-quote.has-text-align-right {
        border-left: none;
        border-right: .25em solid;
        padding-left: 0;
        padding-right: 1em
    }

    .wp-block-quote.has-text-align-center {
        border: none;
        padding-left: 0
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large,
    .wp-block-quote.is-style-plain {
        border: none
    }

    .wp-block-search .wp-block-search__label {
        font-weight: 700
    }

    .wp-block-search__button {
        border: 1px solid #ccc;
        padding: .375em .625em
    }

    :where(.wp-block-group.has-background) {
        padding: 1.25em 2.375em
    }

    .wp-block-separator.has-css-opacity {
        opacity: .4
    }

    .wp-block-separator {
        border: none;
        border-bottom: 2px solid;
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
        opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
        border-bottom: none;
        height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
        height: 2px
    }

    .wp-block-table {
        margin: "0 0 1em 0"
    }

    .wp-block-table thead {
        border-bottom: 3px solid
    }

    .wp-block-table tfoot {
        border-top: 3px solid
    }

    .wp-block-table td,
    .wp-block-table th {
        word-break: normal
    }

    .wp-block-table figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-table figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-video figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video {
        margin: 0 0 1em
    }

    .wp-block-template-part.has-background {
        padding: 1.25em 2.375em;
        margin-top: 0;
        margin-bottom: 0
    }
</style>
<link rel="stylesheet" id="mediaelement-css" href="{{ asset('template/app/css/mediaelementplayer-legacy.min.css') }}"
    type="text/css" media="all">
<link rel="stylesheet" id="wp-mediaelement-css" href="{{ asset('template/app/css/wp-mediaelement.min.css') }}"
    type="text/css" media="all">
<link rel="stylesheet" id="wc-blocks-vendors-style-css"
    href="{{ asset('template/app/css/wc-blocks-vendors-style.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('template/app/css/wc-blocks-style.css') }}"
    type="text/css" media="all">
<link rel="stylesheet" id="classic-theme-styles-css" href="{{ asset('template/app/css/classic-themes.min.css') }}"
    type="text/css" media="all">
<style id="global-styles-inline-css" type="text/css">
    body {
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
        --wp--preset--color--lightning-yellow: #F9BF26;
        --wp--preset--color--color-black: #000;
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
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 11px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--font-size--normal: 12px;
        --wp--preset--font-size--huge: 49px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
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

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
</style>
<style id="extendify-gutenberg-patterns-and-templates-utilities-inline-css" type="text/css">
    .ext-absolute {
        position: absolute !important;
    }

    .ext-relative {
        position: relative !important;
    }

    .ext-top-base {
        top: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-top-lg {
        top: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--top-base {
        top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--top-lg {
        top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-right-base {
        right: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-right-lg {
        right: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--right-base {
        right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--right-lg {
        right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-bottom-base {
        bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-bottom-lg {
        bottom: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--bottom-base {
        bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--bottom-lg {
        bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-left-base {
        left: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-left-lg {
        left: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--left-base {
        left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--left-lg {
        left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-order-1 {
        order: 1 !important;
    }

    .ext-order-2 {
        order: 2 !important;
    }

    .ext-col-auto {
        grid-column: auto !important;
    }

    .ext-col-span-1 {
        grid-column: span 1 / span 1 !important;
    }

    .ext-col-span-2 {
        grid-column: span 2 / span 2 !important;
    }

    .ext-col-span-3 {
        grid-column: span 3 / span 3 !important;
    }

    .ext-col-span-4 {
        grid-column: span 4 / span 4 !important;
    }

    .ext-col-span-5 {
        grid-column: span 5 / span 5 !important;
    }

    .ext-col-span-6 {
        grid-column: span 6 / span 6 !important;
    }

    .ext-col-span-7 {
        grid-column: span 7 / span 7 !important;
    }

    .ext-col-span-8 {
        grid-column: span 8 / span 8 !important;
    }

    .ext-col-span-9 {
        grid-column: span 9 / span 9 !important;
    }

    .ext-col-span-10 {
        grid-column: span 10 / span 10 !important;
    }

    .ext-col-span-11 {
        grid-column: span 11 / span 11 !important;
    }

    .ext-col-span-12 {
        grid-column: span 12 / span 12 !important;
    }

    .ext-col-span-full {
        grid-column: 1 / -1 !important;
    }

    .ext-col-start-1 {
        grid-column-start: 1 !important;
    }

    .ext-col-start-2 {
        grid-column-start: 2 !important;
    }

    .ext-col-start-3 {
        grid-column-start: 3 !important;
    }

    .ext-col-start-4 {
        grid-column-start: 4 !important;
    }

    .ext-col-start-5 {
        grid-column-start: 5 !important;
    }

    .ext-col-start-6 {
        grid-column-start: 6 !important;
    }

    .ext-col-start-7 {
        grid-column-start: 7 !important;
    }

    .ext-col-start-8 {
        grid-column-start: 8 !important;
    }

    .ext-col-start-9 {
        grid-column-start: 9 !important;
    }

    .ext-col-start-10 {
        grid-column-start: 10 !important;
    }

    .ext-col-start-11 {
        grid-column-start: 11 !important;
    }

    .ext-col-start-12 {
        grid-column-start: 12 !important;
    }

    .ext-col-start-13 {
        grid-column-start: 13 !important;
    }

    .ext-col-start-auto {
        grid-column-start: auto !important;
    }

    .ext-col-end-1 {
        grid-column-end: 1 !important;
    }

    .ext-col-end-2 {
        grid-column-end: 2 !important;
    }

    .ext-col-end-3 {
        grid-column-end: 3 !important;
    }

    .ext-col-end-4 {
        grid-column-end: 4 !important;
    }

    .ext-col-end-5 {
        grid-column-end: 5 !important;
    }

    .ext-col-end-6 {
        grid-column-end: 6 !important;
    }

    .ext-col-end-7 {
        grid-column-end: 7 !important;
    }

    .ext-col-end-8 {
        grid-column-end: 8 !important;
    }

    .ext-col-end-9 {
        grid-column-end: 9 !important;
    }

    .ext-col-end-10 {
        grid-column-end: 10 !important;
    }

    .ext-col-end-11 {
        grid-column-end: 11 !important;
    }

    .ext-col-end-12 {
        grid-column-end: 12 !important;
    }

    .ext-col-end-13 {
        grid-column-end: 13 !important;
    }

    .ext-col-end-auto {
        grid-column-end: auto !important;
    }

    .ext-row-auto {
        grid-row: auto !important;
    }

    .ext-row-span-1 {
        grid-row: span 1 / span 1 !important;
    }

    .ext-row-span-2 {
        grid-row: span 2 / span 2 !important;
    }

    .ext-row-span-3 {
        grid-row: span 3 / span 3 !important;
    }

    .ext-row-span-4 {
        grid-row: span 4 / span 4 !important;
    }

    .ext-row-span-5 {
        grid-row: span 5 / span 5 !important;
    }

    .ext-row-span-6 {
        grid-row: span 6 / span 6 !important;
    }

    .ext-row-span-full {
        grid-row: 1 / -1 !important;
    }

    .ext-row-start-1 {
        grid-row-start: 1 !important;
    }

    .ext-row-start-2 {
        grid-row-start: 2 !important;
    }

    .ext-row-start-3 {
        grid-row-start: 3 !important;
    }

    .ext-row-start-4 {
        grid-row-start: 4 !important;
    }

    .ext-row-start-5 {
        grid-row-start: 5 !important;
    }

    .ext-row-start-6 {
        grid-row-start: 6 !important;
    }

    .ext-row-start-7 {
        grid-row-start: 7 !important;
    }

    .ext-row-start-auto {
        grid-row-start: auto !important;
    }

    .ext-row-end-1 {
        grid-row-end: 1 !important;
    }

    .ext-row-end-2 {
        grid-row-end: 2 !important;
    }

    .ext-row-end-3 {
        grid-row-end: 3 !important;
    }

    .ext-row-end-4 {
        grid-row-end: 4 !important;
    }

    .ext-row-end-5 {
        grid-row-end: 5 !important;
    }

    .ext-row-end-6 {
        grid-row-end: 6 !important;
    }

    .ext-row-end-7 {
        grid-row-end: 7 !important;
    }

    .ext-row-end-auto {
        grid-row-end: auto !important;
    }

    .ext-m-0:not([style*="margin"]) {
        margin: 0 !important;
    }

    .ext-m-auto:not([style*="margin"]) {
        margin: auto !important;
    }

    .ext-m-base:not([style*="margin"]) {
        margin: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-m-lg:not([style*="margin"]) {
        margin: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--m-base:not([style*="margin"]) {
        margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--m-lg:not([style*="margin"]) {
        margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-mx-0:not([style*="margin"]) {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    .ext-mx-auto:not([style*="margin"]) {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .ext-mx-base:not([style*="margin"]) {
        margin-left: var(--wp--style--block-gap, 1.75rem) !important;
        margin-right: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-mx-lg:not([style*="margin"]) {
        margin-left: var(--extendify--spacing--large, 3rem) !important;
        margin-right: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--mx-base:not([style*="margin"]) {
        margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--mx-lg:not([style*="margin"]) {
        margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-my-0:not([style*="margin"]) {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .ext-my-auto:not([style*="margin"]) {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .ext-my-base:not([style*="margin"]) {
        margin-top: var(--wp--style--block-gap, 1.75rem) !important;
        margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-my-lg:not([style*="margin"]) {
        margin-top: var(--extendify--spacing--large, 3rem) !important;
        margin-bottom: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--my-base:not([style*="margin"]) {
        margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--my-lg:not([style*="margin"]) {
        margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-mt-0:not([style*="margin"]) {
        margin-top: 0 !important;
    }

    .ext-mt-auto:not([style*="margin"]) {
        margin-top: auto !important;
    }

    .ext-mt-base:not([style*="margin"]) {
        margin-top: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-mt-lg:not([style*="margin"]) {
        margin-top: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--mt-base:not([style*="margin"]) {
        margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--mt-lg:not([style*="margin"]) {
        margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-mr-0:not([style*="margin"]) {
        margin-right: 0 !important;
    }

    .ext-mr-auto:not([style*="margin"]) {
        margin-right: auto !important;
    }

    .ext-mr-base:not([style*="margin"]) {
        margin-right: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-mr-lg:not([style*="margin"]) {
        margin-right: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--mr-base:not([style*="margin"]) {
        margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--mr-lg:not([style*="margin"]) {
        margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-mb-0:not([style*="margin"]) {
        margin-bottom: 0 !important;
    }

    .ext-mb-auto:not([style*="margin"]) {
        margin-bottom: auto !important;
    }

    .ext-mb-base:not([style*="margin"]) {
        margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-mb-lg:not([style*="margin"]) {
        margin-bottom: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--mb-base:not([style*="margin"]) {
        margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--mb-lg:not([style*="margin"]) {
        margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-ml-0:not([style*="margin"]) {
        margin-left: 0 !important;
    }

    .ext-ml-auto:not([style*="margin"]) {
        margin-left: auto !important;
    }

    .ext-ml-base:not([style*="margin"]) {
        margin-left: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-ml-lg:not([style*="margin"]) {
        margin-left: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext--ml-base:not([style*="margin"]) {
        margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    }

    .ext--ml-lg:not([style*="margin"]) {
        margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    }

    .ext-block {
        display: block !important;
    }

    .ext-inline-block {
        display: inline-block !important;
    }

    .ext-inline {
        display: inline !important;
    }

    .ext-flex {
        display: flex !important;
    }

    .ext-inline-flex {
        display: inline-flex !important;
    }

    .ext-grid {
        display: grid !important;
    }

    .ext-inline-grid {
        display: inline-grid !important;
    }

    .ext-hidden {
        display: none !important;
    }

    .ext-w-auto {
        width: auto !important;
    }

    .ext-w-full {
        width: 100% !important;
    }

    .ext-max-w-full {
        max-width: 100% !important;
    }

    .ext-flex-1 {
        flex: 1 1 0% !important;
    }

    .ext-flex-auto {
        flex: 1 1 auto !important;
    }

    .ext-flex-initial {
        flex: 0 1 auto !important;
    }

    .ext-flex-none {
        flex: none !important;
    }

    .ext-flex-shrink-0 {
        flex-shrink: 0 !important;
    }

    .ext-flex-shrink {
        flex-shrink: 1 !important;
    }

    .ext-flex-grow-0 {
        flex-grow: 0 !important;
    }

    .ext-flex-grow {
        flex-grow: 1 !important;
    }

    .ext-list-none {
        list-style-type: none !important;
    }

    .ext-grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-7 {
        grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-8 {
        grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-9 {
        grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-10 {
        grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-11 {
        grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-12 {
        grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
    }

    .ext-grid-cols-none {
        grid-template-columns: none !important;
    }

    .ext-grid-rows-1 {
        grid-template-rows: repeat(1, minmax(0, 1fr)) !important;
    }

    .ext-grid-rows-2 {
        grid-template-rows: repeat(2, minmax(0, 1fr)) !important;
    }

    .ext-grid-rows-3 {
        grid-template-rows: repeat(3, minmax(0, 1fr)) !important;
    }

    .ext-grid-rows-4 {
        grid-template-rows: repeat(4, minmax(0, 1fr)) !important;
    }

    .ext-grid-rows-5 {
        grid-template-rows: repeat(5, minmax(0, 1fr)) !important;
    }

    .ext-grid-rows-6 {
        grid-template-rows: repeat(6, minmax(0, 1fr)) !important;
    }

    .ext-grid-rows-none {
        grid-template-rows: none !important;
    }

    .ext-flex-row {
        flex-direction: row !important;
    }

    .ext-flex-row-reverse {
        flex-direction: row-reverse !important;
    }

    .ext-flex-col {
        flex-direction: column !important;
    }

    .ext-flex-col-reverse {
        flex-direction: column-reverse !important;
    }

    .ext-flex-wrap {
        flex-wrap: wrap !important;
    }

    .ext-flex-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .ext-flex-nowrap {
        flex-wrap: nowrap !important;
    }

    .ext-items-start {
        align-items: flex-start !important;
    }

    .ext-items-end {
        align-items: flex-end !important;
    }

    .ext-items-center {
        align-items: center !important;
    }

    .ext-items-baseline {
        align-items: baseline !important;
    }

    .ext-items-stretch {
        align-items: stretch !important;
    }

    .ext-justify-start {
        justify-content: flex-start !important;
    }

    .ext-justify-end {
        justify-content: flex-end !important;
    }

    .ext-justify-center {
        justify-content: center !important;
    }

    .ext-justify-between {
        justify-content: space-between !important;
    }

    .ext-justify-around {
        justify-content: space-around !important;
    }

    .ext-justify-evenly {
        justify-content: space-evenly !important;
    }

    .ext-justify-items-start {
        justify-items: start !important;
    }

    .ext-justify-items-end {
        justify-items: end !important;
    }

    .ext-justify-items-center {
        justify-items: center !important;
    }

    .ext-justify-items-stretch {
        justify-items: stretch !important;
    }

    .ext-gap-0 {
        gap: 0 !important;
    }

    .ext-gap-base {
        gap: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-gap-lg {
        gap: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-gap-x-0 {
        -moz-column-gap: 0 !important;
        column-gap: 0 !important;
    }

    .ext-gap-x-base {
        -moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
        column-gap: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-gap-x-lg {
        -moz-column-gap: var(--extendify--spacing--large, 3rem) !important;
        column-gap: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-gap-y-0 {
        row-gap: 0 !important;
    }

    .ext-gap-y-base {
        row-gap: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-gap-y-lg {
        row-gap: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-justify-self-auto {
        justify-self: auto !important;
    }

    .ext-justify-self-start {
        justify-self: start !important;
    }

    .ext-justify-self-end {
        justify-self: end !important;
    }

    .ext-justify-self-center {
        justify-self: center !important;
    }

    .ext-justify-self-stretch {
        justify-self: stretch !important;
    }

    .ext-rounded-none {
        border-radius: 0px !important;
    }

    .ext-rounded-full {
        border-radius: 9999px !important;
    }

    .ext-rounded-t-none {
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }

    .ext-rounded-t-full {
        border-top-left-radius: 9999px !important;
        border-top-right-radius: 9999px !important;
    }

    .ext-rounded-r-none {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .ext-rounded-r-full {
        border-top-right-radius: 9999px !important;
        border-bottom-right-radius: 9999px !important;
    }

    .ext-rounded-b-none {
        border-bottom-right-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }

    .ext-rounded-b-full {
        border-bottom-right-radius: 9999px !important;
        border-bottom-left-radius: 9999px !important;
    }

    .ext-rounded-l-none {
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }

    .ext-rounded-l-full {
        border-top-left-radius: 9999px !important;
        border-bottom-left-radius: 9999px !important;
    }

    .ext-rounded-tl-none {
        border-top-left-radius: 0px !important;
    }

    .ext-rounded-tl-full {
        border-top-left-radius: 9999px !important;
    }

    .ext-rounded-tr-none {
        border-top-right-radius: 0px !important;
    }

    .ext-rounded-tr-full {
        border-top-right-radius: 9999px !important;
    }

    .ext-rounded-br-none {
        border-bottom-right-radius: 0px !important;
    }

    .ext-rounded-br-full {
        border-bottom-right-radius: 9999px !important;
    }

    .ext-rounded-bl-none {
        border-bottom-left-radius: 0px !important;
    }

    .ext-rounded-bl-full {
        border-bottom-left-radius: 9999px !important;
    }

    .ext-border-0 {
        border-width: 0px !important;
    }

    .ext-border-t-0 {
        border-top-width: 0px !important;
    }

    .ext-border-r-0 {
        border-right-width: 0px !important;
    }

    .ext-border-b-0 {
        border-bottom-width: 0px !important;
    }

    .ext-border-l-0 {
        border-left-width: 0px !important;
    }

    .ext-p-0:not([style*="padding"]) {
        padding: 0 !important;
    }

    .ext-p-base:not([style*="padding"]) {
        padding: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-p-lg:not([style*="padding"]) {
        padding: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-px-0:not([style*="padding"]) {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .ext-px-base:not([style*="padding"]) {
        padding-left: var(--wp--style--block-gap, 1.75rem) !important;
        padding-right: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-px-lg:not([style*="padding"]) {
        padding-left: var(--extendify--spacing--large, 3rem) !important;
        padding-right: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-py-0:not([style*="padding"]) {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .ext-py-base:not([style*="padding"]) {
        padding-top: var(--wp--style--block-gap, 1.75rem) !important;
        padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-py-lg:not([style*="padding"]) {
        padding-top: var(--extendify--spacing--large, 3rem) !important;
        padding-bottom: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-pt-0:not([style*="padding"]) {
        padding-top: 0 !important;
    }

    .ext-pt-base:not([style*="padding"]) {
        padding-top: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-pt-lg:not([style*="padding"]) {
        padding-top: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-pr-0:not([style*="padding"]) {
        padding-right: 0 !important;
    }

    .ext-pr-base:not([style*="padding"]) {
        padding-right: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-pr-lg:not([style*="padding"]) {
        padding-right: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-pb-0:not([style*="padding"]) {
        padding-bottom: 0 !important;
    }

    .ext-pb-base:not([style*="padding"]) {
        padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-pb-lg:not([style*="padding"]) {
        padding-bottom: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-pl-0:not([style*="padding"]) {
        padding-left: 0 !important;
    }

    .ext-pl-base:not([style*="padding"]) {
        padding-left: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .ext-pl-lg:not([style*="padding"]) {
        padding-left: var(--extendify--spacing--large, 3rem) !important;
    }

    .ext-text-left {
        text-align: left !important;
    }

    .ext-text-center {
        text-align: center !important;
    }

    .ext-text-right {
        text-align: right !important;
    }

    .ext-leading-none {
        line-height: 1 !important;
    }

    .ext-leading-tight {
        line-height: 1.25 !important;
    }

    .ext-leading-snug {
        line-height: 1.375 !important;
    }

    .ext-leading-normal {
        line-height: 1.5 !important;
    }

    .ext-leading-relaxed {
        line-height: 1.625 !important;
    }

    .ext-leading-loose {
        line-height: 2 !important;
    }

    .ext-aspect-square img {
        aspect-ratio: 1 / 1 !important;
        -o-object-fit: cover !important;
        object-fit: cover !important;
    }

    .ext-aspect-landscape img {
        aspect-ratio: 4 / 3 !important;
        -o-object-fit: cover !important;
        object-fit: cover !important;
    }

    .ext-aspect-landscape-wide img {
        aspect-ratio: 16 / 9 !important;
        -o-object-fit: cover !important;
        object-fit: cover !important;
    }

    .ext-aspect-portrait img {
        aspect-ratio: 3 / 4 !important;
        -o-object-fit: cover !important;
        object-fit: cover !important;
    }

    .ext-aspect-square .components-resizable-box__container,
    .ext-aspect-landscape .components-resizable-box__container,
    .ext-aspect-landscape-wide .components-resizable-box__container,
    .ext-aspect-portrait .components-resizable-box__container {
        height: auto !important;
    }

    .clip-path--rhombus img {
        -webkit-clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%) !important;
        clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%) !important;
    }

    .clip-path--diamond img {
        -webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%) !important;
        clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%) !important;
    }

    .clip-path--rhombus-alt img {
        -webkit-clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%) !important;
        clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%) !important;
    }

    /*
            The .ext utility is a top-level class that we use to target contents within our patterns.
            We use it here to ensure columns blocks display well across themes.
            */

    .wp-block-columns[class*="fullwidth-cols"] {
        /* no suggestion */
        margin-bottom: unset !important;
    }

    .wp-block-column.editor\:pointer-events-none {
        /* no suggestion */
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .is-root-container.block-editor-block-list__layout>[data-align="full"]:not(:first-of-type)>.wp-block-column.editor\:pointer-events-none,
    .is-root-container.block-editor-block-list__layout>[data-align="wide"]>.wp-block-column.editor\:pointer-events-none {
        /* no suggestion */
        margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
    }

    .is-root-container.block-editor-block-list__layout>[data-align="full"]:not(:first-of-type)>.ext-my-0,
    .is-root-container.block-editor-block-list__layout>[data-align="wide"]>.ext-my-0:not([style*="margin"]) {
        /* no suggestion */
        margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
    }

    /* Some popular themes use padding instead of core margin for columns; remove it */

    .ext .wp-block-columns .wp-block-column[style*="padding"] {
        /* no suggestion */
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    /* Some popular themes add double spacing between columns; remove it */

    .ext .wp-block-columns+.wp-block-columns:not([class*="mt-"]):not([class*="my-"]):not([style*="margin"]) {
        /* no suggestion */
        margin-top: 0 !important;
    }

    [class*="fullwidth-cols"] .wp-block-column:first-child,
    [class*="fullwidth-cols"] .wp-block-group:first-child {
        /* no suggestion */
    }

    [class*="fullwidth-cols"] .wp-block-column:first-child,
    [class*="fullwidth-cols"] .wp-block-group:first-child {
        margin-top: 0 !important;
    }

    [class*="fullwidth-cols"] .wp-block-column:last-child,
    [class*="fullwidth-cols"] .wp-block-group:last-child {
        /* no suggestion */
    }

    [class*="fullwidth-cols"] .wp-block-column:last-child,
    [class*="fullwidth-cols"] .wp-block-group:last-child {
        margin-bottom: 0 !important;
    }

    [class*="fullwidth-cols"] .wp-block-column:first-child>* {
        /* no suggestion */
        margin-top: 0 !important;
    }

    [class*="fullwidth-cols"] .wp-block-column>*:first-child {
        /* no suggestion */
        margin-top: 0 !important;
    }

    [class*="fullwidth-cols"] .wp-block-column>*:last-child {
        /* no suggestion */
        margin-bottom: 0 !important;
    }

    .ext .is-not-stacked-on-mobile .wp-block-column {
        /* no suggestion */
        margin-bottom: 0 !important;
    }

    /* Add base margin bottom to all columns */

    .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
        /* no suggestion */
        margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    @media (min-width: 782px) {
        .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
            /* no suggestion */
            margin-bottom: 0 !important;
        }
    }

    /* Remove margin bottom from "not-stacked" columns */

    .wp-block-columns[class*="fullwidth-cols"].is-not-stacked-on-mobile>.wp-block-column {
        /* no suggestion */
        margin-bottom: 0 !important;
    }

    @media (min-width: 600px) and (max-width: 781px) {
        .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)>.wp-block-column:nth-child(even) {
            /* no suggestion */
            margin-left: var(--wp--style--block-gap, 2em) !important;
        }
    }

    /*
                The `tablet:fullwidth-cols` and `desktop:fullwidth-cols` utilities are used
                to counter the core/columns responsive for at our breakpoints.
            */

    @media (max-width: 781px) {
        .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
            flex-wrap: wrap !important;
        }

        .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
            margin-left: 0 !important;
        }

        .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*="margin"]) {
            /* no suggestion */
            margin-left: 0 !important;
        }

        .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
            flex-basis: 100% !important;
            /* Required to negate core/columns flex-basis */
        }
    }

    @media (max-width: 1079px) {
        .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
            flex-wrap: wrap !important;
        }

        .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
            margin-left: 0 !important;
        }

        .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*="margin"]) {
            /* no suggestion */
            margin-left: 0 !important;
        }

        .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
            flex-basis: 100% !important;
            /* Required to negate core/columns flex-basis */
        }

        .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }
    }

    .direction-rtl {
        direction: rtl !important;
    }

    .direction-ltr {
        direction: ltr !important;
    }

    /* Use "is-style-" prefix to support adding this style to the core/list block */

    .is-style-inline-list {
        padding-left: 0 !important;
    }

    .is-style-inline-list li {
        /* no suggestion */
        list-style-type: none !important;
    }

    @media (min-width: 782px) {
        .is-style-inline-list li {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
            display: inline !important;
        }
    }

    .is-style-inline-list li:first-child {
        /* no suggestion */
    }

    @media (min-width: 782px) {
        .is-style-inline-list li:first-child {
            margin-left: 0 !important;
        }
    }

    .is-style-inline-list li:last-child {
        /* no suggestion */
    }

    @media (min-width: 782px) {
        .is-style-inline-list li:last-child {
            margin-right: 0 !important;
        }
    }

    .bring-to-front {
        position: relative !important;
        z-index: 10 !important;
    }

    .text-stroke {
        -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width,
                2px) !important;
        -webkit-text-stroke-color: var(--wp--preset--color--background) !important;
    }

    .text-stroke--primary {
        -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width,
                2px) !important;
        -webkit-text-stroke-color: var(--wp--preset--color--primary) !important;
    }

    .text-stroke--secondary {
        -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width,
                2px) !important;
        -webkit-text-stroke-color: var(--wp--preset--color--secondary) !important;
    }

    .editor\:no-caption .block-editor-rich-text__editable {
        display: none !important;
    }

    .editor\:no-inserter>.block-list-appender,
    .editor\:no-inserter .wp-block-group__inner-container>.block-list-appender {
        display: none !important;
    }

    .editor\:no-inserter .wp-block-cover__inner-container>.block-list-appender {
        display: none !important;
    }

    .editor\:no-inserter .wp-block-column:not(.is-selected)>.block-list-appender {
        display: none !important;
    }

    .editor\:no-resize .components-resizable-box__handle::after,
    .editor\:no-resize .components-resizable-box__side-handle::before,
    .editor\:no-resize .components-resizable-box__handle {
        display: none !important;
        pointer-events: none !important;
    }

    .editor\:no-resize .components-resizable-box__container {
        display: block !important;
    }

    .editor\:pointer-events-none {
        pointer-events: none !important;
    }

    .is-style-angled {
        /* no suggestion */
        align-items: center !important;
        justify-content: flex-end !important;
    }

    .ext .is-style-angled>[class*="_inner-container"] {
        align-items: center !important;
    }

    .is-style-angled .wp-block-cover__image-background,
    .is-style-angled .wp-block-cover__video-background {
        /* no suggestion */
        -webkit-clip-path: polygon(0 0, 30% 0%, 50% 100%, 0% 100%) !important;
        clip-path: polygon(0 0, 30% 0%, 50% 100%, 0% 100%) !important;
        z-index: 1 !important;
    }

    @media (min-width: 782px) {

        .is-style-angled .wp-block-cover__image-background,
        .is-style-angled .wp-block-cover__video-background {
            /* no suggestion */
            -webkit-clip-path: polygon(0 0, 55% 0%, 65% 100%, 0% 100%) !important;
            clip-path: polygon(0 0, 55% 0%, 65% 100%, 0% 100%) !important;
        }
    }

    .has-foreground-color {
        /* no suggestion */
        color: var(--wp--preset--color--foreground, #000) !important;
    }

    .has-foreground-background-color {
        /* no suggestion */
        background-color: var(--wp--preset--color--foreground, #000) !important;
    }

    .has-background-color {
        /* no suggestion */
        color: var(--wp--preset--color--background, #fff) !important;
    }

    .has-background-background-color {
        /* no suggestion */
        background-color: var(--wp--preset--color--background, #fff) !important;
    }

    .has-primary-color {
        /* no suggestion */
        color: var(--wp--preset--color--primary, #4b5563) !important;
    }

    .has-primary-background-color {
        /* no suggestion */
        background-color: var(--wp--preset--color--primary, #4b5563) !important;
    }

    .has-secondary-color {
        /* no suggestion */
        color: var(--wp--preset--color--secondary, #9ca3af) !important;
    }

    .has-secondary-background-color {
        /* no suggestion */
        background-color: var(--wp--preset--color--secondary, #9ca3af) !important;
    }

    /* Ensure themes that target specific elements use the right colors */

    .ext.has-text-color p,
    .ext.has-text-color h1,
    .ext.has-text-color h2,
    .ext.has-text-color h3,
    .ext.has-text-color h4,
    .ext.has-text-color h5,
    .ext.has-text-color h6 {
        /* no suggestion */
        color: currentColor !important;
    }

    .has-white-color {
        /* no suggestion */
        color: var(--wp--preset--color--white, #fff) !important;
    }

    .has-black-color {
        /* no suggestion */
        color: var(--wp--preset--color--black, #000) !important;
    }

    .has-ext-foreground-background-color {
        /* no suggestion */
        background-color: var(--wp--preset--color--foreground,
                var(--wp--preset--color--black, #000)) !important;
    }

    .has-ext-primary-background-color {
        /* no suggestion */
        background-color: var(--wp--preset--color--primary,
                var(--wp--preset--color--cyan-bluish-gray, #000)) !important;
    }

    /* Fix button borders with specified background colors */

    .wp-block-button__link.has-black-background-color {
        /* no suggestion */
        border-color: var(--wp--preset--color--black, #000) !important;
    }

    .wp-block-button__link.has-white-background-color {
        /* no suggestion */
        border-color: var(--wp--preset--color--white, #fff) !important;
    }

    .has-ext-small-font-size {
        /* no suggestion */
        font-size: var(--wp--preset--font-size--ext-small) !important;
    }

    .has-ext-medium-font-size {
        /* no suggestion */
        font-size: var(--wp--preset--font-size--ext-medium) !important;
    }

    .has-ext-large-font-size {
        /* no suggestion */
        font-size: var(--wp--preset--font-size--ext-large) !important;
        line-height: 1.2 !important;
    }

    .has-ext-x-large-font-size {
        /* no suggestion */
        font-size: var(--wp--preset--font-size--ext-x-large) !important;
        line-height: 1 !important;
    }

    .has-ext-xx-large-font-size {
        /* no suggestion */
        font-size: var(--wp--preset--font-size--ext-xx-large) !important;
        line-height: 1 !important;
    }

    /* Line height */

    .has-ext-x-large-font-size:not([style*="line-height"]) {
        /* no suggestion */
        line-height: 1.1 !important;
    }

    .has-ext-xx-large-font-size:not([style*="line-height"]) {
        /* no suggestion */
        line-height: 1.1 !important;
    }

    .ext .wp-block-group>* {
        /* Line height */
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .ext .wp-block-group>*+* {
        margin-top: var(--wp--style--block-gap, 1.75rem) !important;
        margin-bottom: 0 !important;
    }

    .ext h2 {
        margin-top: var(--wp--style--block-gap, 1.75rem) !important;
        margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
    }

    .has-ext-x-large-font-size+p,
    .has-ext-x-large-font-size+h3 {
        margin-top: 0.5rem !important;
    }

    .ext .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
        width: calc(25% - var(--wp--style--block-gap, 0.5em) * 0.75) !important;
        min-width: 12rem !important;
    }

    /* Classic themes use an inner [class*="_inner-container"] that our utilities cannot directly target, so we need to do so with a few */

    .ext .ext-grid>[class*="_inner-container"] {
        /* no suggestion */
        display: grid !important;
    }

    /* Unhinge grid for container blocks in classic themes, and < 5.9 */

    .ext>[class*="_inner-container"]>.ext-grid:not([class*="columns"]),
    .ext>[class*="_inner-container"]>.wp-block>.ext-grid:not([class*="columns"]) {
        /* no suggestion */
        display: initial !important;
    }

    /* Grid Columns */

    .ext .ext-grid-cols-1>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-2>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-3>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-4>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-5>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-6>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-7>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-8>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-9>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-10>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-11>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-12>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-13>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: repeat(13, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-cols-none>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-columns: none !important;
    }

    /* Grid Rows */

    .ext .ext-grid-rows-1>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: repeat(1, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-rows-2>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: repeat(2, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-rows-3>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: repeat(3, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-rows-4>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: repeat(4, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-rows-5>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: repeat(5, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-rows-6>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: repeat(6, minmax(0, 1fr)) !important;
    }

    .ext .ext-grid-rows-none>[class*="_inner-container"] {
        /* no suggestion */
        grid-template-rows: none !important;
    }

    /* Align */

    .ext .ext-items-start>[class*="_inner-container"] {
        align-items: flex-start !important;
    }

    .ext .ext-items-end>[class*="_inner-container"] {
        align-items: flex-end !important;
    }

    .ext .ext-items-center>[class*="_inner-container"] {
        align-items: center !important;
    }

    .ext .ext-items-baseline>[class*="_inner-container"] {
        align-items: baseline !important;
    }

    .ext .ext-items-stretch>[class*="_inner-container"] {
        align-items: stretch !important;
    }

    .ext.wp-block-group>*:last-child {
        /* no suggestion */
        margin-bottom: 0 !important;
    }

    /* For <5.9 */

    .ext .wp-block-group__inner-container {
        /* no suggestion */
        padding: 0 !important;
    }

    .ext.has-background {
        /* no suggestion */
        padding-left: var(--wp--style--block-gap, 1.75rem) !important;
        padding-right: var(--wp--style--block-gap, 1.75rem) !important;
    }

    /* Fallback for classic theme group blocks */

    .ext *[class*="inner-container"]>.alignwide *[class*="inner-container"],
    .ext *[class*="inner-container"]>[data-align="wide"] *[class*="inner-container"] {
        /* no suggestion */
        max-width: var(--responsive--alignwide-width, 120rem) !important;
    }

    .ext *[class*="inner-container"]>.alignwide *[class*="inner-container"]>*,
    .ext *[class*="inner-container"]>[data-align="wide"] *[class*="inner-container"]>* {
        /* no suggestion */
    }

    .ext *[class*="inner-container"]>.alignwide *[class*="inner-container"]>*,
    .ext *[class*="inner-container"]>[data-align="wide"] *[class*="inner-container"]>* {
        max-width: 100% !important;
    }

    /* Ensure image block display is standardized */

    .ext .wp-block-image {
        /* no suggestion */
        position: relative !important;
        text-align: center !important;
    }

    .ext .wp-block-image img {
        /* no suggestion */
        display: inline-block !important;
        vertical-align: middle !important;
    }

    body {
        /* no suggestion */
        /* We need to abstract this out of tailwind.config because clamp doesnt translate with negative margins */
        --extendify--spacing--large: var(--wp--custom--spacing--large,
                clamp(2em, 8vw, 8em)) !important;
        /* Add pattern preset font sizes */
        --wp--preset--font-size--ext-small: 1rem !important;
        --wp--preset--font-size--ext-medium: 1.125rem !important;
        --wp--preset--font-size--ext-large: clamp(1.65rem, 3.5vw, 2.15rem) !important;
        --wp--preset--font-size--ext-x-large: clamp(3rem, 6vw, 4.75rem) !important;
        --wp--preset--font-size--ext-xx-large: clamp(3.25rem, 7.5vw, 5.75rem) !important;
        /* Fallbacks for pre 5.9 themes */
        --wp--preset--color--black: #000 !important;
        --wp--preset--color--white: #fff !important;
    }

    .ext * {
        box-sizing: border-box !important;
    }

    /* Astra: Remove spacer block visuals in the library */

    .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .components-resizable-box__container {
        /* no suggestion */
        background: transparent !important;
    }

    .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .block-library-spacer__resize-container::before {
        /* no suggestion */
        display: none !important;
    }

    /* Twenty Twenty adds a lot of margin automatically to blocks. We only want our own margin added to our patterns. */

    .ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
        /* no suggestion */
        margin-top: unset !important;
        margin-bottom: unset !important;
    }

    /* Ensure no funky business is assigned to alignwide */

    .ext .alignwide {
        /* no suggestion */
        margin-left: auto !important;
        margin-right: auto !important;
    }

    /* Negate blockGap being inappropriately assigned in the editor */

    .is-root-container.block-editor-block-list__layout>[data-align="full"]:not(:first-of-type)>.ext-my-0,
    .is-root-container.block-editor-block-list__layout>[data-align="wide"]>.ext-my-0:not([style*="margin"]) {
        /* no suggestion */
        margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
    }

    /* Ensure vh content in previews looks taller */

    .block-editor-block-preview__content-iframe .preview\:min-h-50 {
        /* no suggestion */
        min-height: 50vw !important;
    }

    .block-editor-block-preview__content-iframe .preview\:min-h-60 {
        /* no suggestion */
        min-height: 60vw !important;
    }

    .block-editor-block-preview__content-iframe .preview\:min-h-70 {
        /* no suggestion */
        min-height: 70vw !important;
    }

    .block-editor-block-preview__content-iframe .preview\:min-h-80 {
        /* no suggestion */
        min-height: 80vw !important;
    }

    .block-editor-block-preview__content-iframe .preview\:min-h-100 {
        /* no suggestion */
        min-height: 100vw !important;
    }

    /*  Removes excess margin when applied to the alignfull parent div in Block Themes */

    .ext-mr-0.alignfull:not([style*="margin"]):not([style*="margin"]) {
        /* no suggestion */
        margin-right: 0 !important;
    }

    .ext-ml-0:not([style*="margin"]):not([style*="margin"]) {
        /* no suggestion */
        margin-left: 0 !important;
    }

    /*  Ensures fullwidth blocks display properly in the editor when margin is zeroed out */

    .is-root-container .wp-block[data-align="full"]>.ext-mx-0:not([style*="margin"]):not([style*="margin"]) {
        /* no suggestion */
        margin-right: calc(1 * var(--wp--custom--spacing--outer, 0)) !important;
        margin-left: calc(1 * var(--wp--custom--spacing--outer, 0)) !important;
        overflow: hidden !important;
        width: unset !important;
    }

    @media (min-width: 782px) {
        .tablet\:ext-absolute {
            position: absolute !important;
        }

        .tablet\:ext-relative {
            position: relative !important;
        }

        .tablet\:ext-top-base {
            top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-top-lg {
            top: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--top-base {
            top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--top-lg {
            top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-right-base {
            right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-right-lg {
            right: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--right-base {
            right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--right-lg {
            right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-bottom-base {
            bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-bottom-lg {
            bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--bottom-base {
            bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--bottom-lg {
            bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-left-base {
            left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-left-lg {
            left: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--left-base {
            left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--left-lg {
            left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-order-1 {
            order: 1 !important;
        }

        .tablet\:ext-order-2 {
            order: 2 !important;
        }

        .tablet\:ext-m-0:not([style*="margin"]) {
            margin: 0 !important;
        }

        .tablet\:ext-m-auto:not([style*="margin"]) {
            margin: auto !important;
        }

        .tablet\:ext-m-base:not([style*="margin"]) {
            margin: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-m-lg:not([style*="margin"]) {
            margin: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--m-base:not([style*="margin"]) {
            margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--m-lg:not([style*="margin"]) {
            margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-mx-0:not([style*="margin"]) {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .tablet\:ext-mx-auto:not([style*="margin"]) {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .tablet\:ext-mx-base:not([style*="margin"]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-mx-lg:not([style*="margin"]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
            margin-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--mx-base:not([style*="margin"]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--mx-lg:not([style*="margin"]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-my-0:not([style*="margin"]) {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .tablet\:ext-my-auto:not([style*="margin"]) {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .tablet\:ext-my-base:not([style*="margin"]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-my-lg:not([style*="margin"]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important;
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--my-base:not([style*="margin"]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--my-lg:not([style*="margin"]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-mt-0:not([style*="margin"]) {
            margin-top: 0 !important;
        }

        .tablet\:ext-mt-auto:not([style*="margin"]) {
            margin-top: auto !important;
        }

        .tablet\:ext-mt-base:not([style*="margin"]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-mt-lg:not([style*="margin"]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--mt-base:not([style*="margin"]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--mt-lg:not([style*="margin"]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-mr-0:not([style*="margin"]) {
            margin-right: 0 !important;
        }

        .tablet\:ext-mr-auto:not([style*="margin"]) {
            margin-right: auto !important;
        }

        .tablet\:ext-mr-base:not([style*="margin"]) {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-mr-lg:not([style*="margin"]) {
            margin-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--mr-base:not([style*="margin"]) {
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--mr-lg:not([style*="margin"]) {
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-mb-0:not([style*="margin"]) {
            margin-bottom: 0 !important;
        }

        .tablet\:ext-mb-auto:not([style*="margin"]) {
            margin-bottom: auto !important;
        }

        .tablet\:ext-mb-base:not([style*="margin"]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-mb-lg:not([style*="margin"]) {
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--mb-base:not([style*="margin"]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--mb-lg:not([style*="margin"]) {
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-ml-0:not([style*="margin"]) {
            margin-left: 0 !important;
        }

        .tablet\:ext-ml-auto:not([style*="margin"]) {
            margin-left: auto !important;
        }

        .tablet\:ext-ml-base:not([style*="margin"]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-ml-lg:not([style*="margin"]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext--ml-base:not([style*="margin"]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .tablet\:ext--ml-lg:not([style*="margin"]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .tablet\:ext-block {
            display: block !important;
        }

        .tablet\:ext-inline-block {
            display: inline-block !important;
        }

        .tablet\:ext-inline {
            display: inline !important;
        }

        .tablet\:ext-flex {
            display: flex !important;
        }

        .tablet\:ext-inline-flex {
            display: inline-flex !important;
        }

        .tablet\:ext-grid {
            display: grid !important;
        }

        .tablet\:ext-inline-grid {
            display: inline-grid !important;
        }

        .tablet\:ext-hidden {
            display: none !important;
        }

        .tablet\:ext-w-auto {
            width: auto !important;
        }

        .tablet\:ext-w-full {
            width: 100% !important;
        }

        .tablet\:ext-max-w-full {
            max-width: 100% !important;
        }

        .tablet\:ext-flex-1 {
            flex: 1 1 0% !important;
        }

        .tablet\:ext-flex-auto {
            flex: 1 1 auto !important;
        }

        .tablet\:ext-flex-initial {
            flex: 0 1 auto !important;
        }

        .tablet\:ext-flex-none {
            flex: none !important;
        }

        .tablet\:ext-flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .tablet\:ext-flex-shrink {
            flex-shrink: 1 !important;
        }

        .tablet\:ext-flex-grow-0 {
            flex-grow: 0 !important;
        }

        .tablet\:ext-flex-grow {
            flex-grow: 1 !important;
        }

        .tablet\:ext-list-none {
            list-style-type: none !important;
        }

        .tablet\:ext-grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-6 {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-7 {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-8 {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-9 {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-10 {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-11 {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-12 {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
        }

        .tablet\:ext-grid-cols-none {
            grid-template-columns: none !important;
        }

        .tablet\:ext-flex-row {
            flex-direction: row !important;
        }

        .tablet\:ext-flex-row-reverse {
            flex-direction: row-reverse !important;
        }

        .tablet\:ext-flex-col {
            flex-direction: column !important;
        }

        .tablet\:ext-flex-col-reverse {
            flex-direction: column-reverse !important;
        }

        .tablet\:ext-flex-wrap {
            flex-wrap: wrap !important;
        }

        .tablet\:ext-flex-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .tablet\:ext-flex-nowrap {
            flex-wrap: nowrap !important;
        }

        .tablet\:ext-items-start {
            align-items: flex-start !important;
        }

        .tablet\:ext-items-end {
            align-items: flex-end !important;
        }

        .tablet\:ext-items-center {
            align-items: center !important;
        }

        .tablet\:ext-items-baseline {
            align-items: baseline !important;
        }

        .tablet\:ext-items-stretch {
            align-items: stretch !important;
        }

        .tablet\:ext-justify-start {
            justify-content: flex-start !important;
        }

        .tablet\:ext-justify-end {
            justify-content: flex-end !important;
        }

        .tablet\:ext-justify-center {
            justify-content: center !important;
        }

        .tablet\:ext-justify-between {
            justify-content: space-between !important;
        }

        .tablet\:ext-justify-around {
            justify-content: space-around !important;
        }

        .tablet\:ext-justify-evenly {
            justify-content: space-evenly !important;
        }

        .tablet\:ext-justify-items-start {
            justify-items: start !important;
        }

        .tablet\:ext-justify-items-end {
            justify-items: end !important;
        }

        .tablet\:ext-justify-items-center {
            justify-items: center !important;
        }

        .tablet\:ext-justify-items-stretch {
            justify-items: stretch !important;
        }

        .tablet\:ext-justify-self-auto {
            justify-self: auto !important;
        }

        .tablet\:ext-justify-self-start {
            justify-self: start !important;
        }

        .tablet\:ext-justify-self-end {
            justify-self: end !important;
        }

        .tablet\:ext-justify-self-center {
            justify-self: center !important;
        }

        .tablet\:ext-justify-self-stretch {
            justify-self: stretch !important;
        }

        .tablet\:ext-p-0:not([style*="padding"]) {
            padding: 0 !important;
        }

        .tablet\:ext-p-base:not([style*="padding"]) {
            padding: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-p-lg:not([style*="padding"]) {
            padding: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-px-0:not([style*="padding"]) {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .tablet\:ext-px-base:not([style*="padding"]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-px-lg:not([style*="padding"]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
            padding-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-py-0:not([style*="padding"]) {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .tablet\:ext-py-base:not([style*="padding"]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important;
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-py-lg:not([style*="padding"]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important;
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-pt-0:not([style*="padding"]) {
            padding-top: 0 !important;
        }

        .tablet\:ext-pt-base:not([style*="padding"]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-pt-lg:not([style*="padding"]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-pr-0:not([style*="padding"]) {
            padding-right: 0 !important;
        }

        .tablet\:ext-pr-base:not([style*="padding"]) {
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-pr-lg:not([style*="padding"]) {
            padding-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-pb-0:not([style*="padding"]) {
            padding-bottom: 0 !important;
        }

        .tablet\:ext-pb-base:not([style*="padding"]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-pb-lg:not([style*="padding"]) {
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-pl-0:not([style*="padding"]) {
            padding-left: 0 !important;
        }

        .tablet\:ext-pl-base:not([style*="padding"]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .tablet\:ext-pl-lg:not([style*="padding"]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
        }

        .tablet\:ext-text-left {
            text-align: left !important;
        }

        .tablet\:ext-text-center {
            text-align: center !important;
        }

        .tablet\:ext-text-right {
            text-align: right !important;
        }
    }

    @media (min-width: 1080px) {
        .desktop\:ext-absolute {
            position: absolute !important;
        }

        .desktop\:ext-relative {
            position: relative !important;
        }

        .desktop\:ext-top-base {
            top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-top-lg {
            top: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--top-base {
            top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--top-lg {
            top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-right-base {
            right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-right-lg {
            right: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--right-base {
            right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--right-lg {
            right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-bottom-base {
            bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-bottom-lg {
            bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--bottom-base {
            bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--bottom-lg {
            bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-left-base {
            left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-left-lg {
            left: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--left-base {
            left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--left-lg {
            left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-order-1 {
            order: 1 !important;
        }

        .desktop\:ext-order-2 {
            order: 2 !important;
        }

        .desktop\:ext-m-0:not([style*="margin"]) {
            margin: 0 !important;
        }

        .desktop\:ext-m-auto:not([style*="margin"]) {
            margin: auto !important;
        }

        .desktop\:ext-m-base:not([style*="margin"]) {
            margin: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-m-lg:not([style*="margin"]) {
            margin: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--m-base:not([style*="margin"]) {
            margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--m-lg:not([style*="margin"]) {
            margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-mx-0:not([style*="margin"]) {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .desktop\:ext-mx-auto:not([style*="margin"]) {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .desktop\:ext-mx-base:not([style*="margin"]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-mx-lg:not([style*="margin"]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
            margin-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--mx-base:not([style*="margin"]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--mx-lg:not([style*="margin"]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-my-0:not([style*="margin"]) {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .desktop\:ext-my-auto:not([style*="margin"]) {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .desktop\:ext-my-base:not([style*="margin"]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-my-lg:not([style*="margin"]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important;
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--my-base:not([style*="margin"]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--my-lg:not([style*="margin"]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-mt-0:not([style*="margin"]) {
            margin-top: 0 !important;
        }

        .desktop\:ext-mt-auto:not([style*="margin"]) {
            margin-top: auto !important;
        }

        .desktop\:ext-mt-base:not([style*="margin"]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-mt-lg:not([style*="margin"]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--mt-base:not([style*="margin"]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--mt-lg:not([style*="margin"]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-mr-0:not([style*="margin"]) {
            margin-right: 0 !important;
        }

        .desktop\:ext-mr-auto:not([style*="margin"]) {
            margin-right: auto !important;
        }

        .desktop\:ext-mr-base:not([style*="margin"]) {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-mr-lg:not([style*="margin"]) {
            margin-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--mr-base:not([style*="margin"]) {
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--mr-lg:not([style*="margin"]) {
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-mb-0:not([style*="margin"]) {
            margin-bottom: 0 !important;
        }

        .desktop\:ext-mb-auto:not([style*="margin"]) {
            margin-bottom: auto !important;
        }

        .desktop\:ext-mb-base:not([style*="margin"]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-mb-lg:not([style*="margin"]) {
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--mb-base:not([style*="margin"]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--mb-lg:not([style*="margin"]) {
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-ml-0:not([style*="margin"]) {
            margin-left: 0 !important;
        }

        .desktop\:ext-ml-auto:not([style*="margin"]) {
            margin-left: auto !important;
        }

        .desktop\:ext-ml-base:not([style*="margin"]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-ml-lg:not([style*="margin"]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext--ml-base:not([style*="margin"]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .desktop\:ext--ml-lg:not([style*="margin"]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .desktop\:ext-block {
            display: block !important;
        }

        .desktop\:ext-inline-block {
            display: inline-block !important;
        }

        .desktop\:ext-inline {
            display: inline !important;
        }

        .desktop\:ext-flex {
            display: flex !important;
        }

        .desktop\:ext-inline-flex {
            display: inline-flex !important;
        }

        .desktop\:ext-grid {
            display: grid !important;
        }

        .desktop\:ext-inline-grid {
            display: inline-grid !important;
        }

        .desktop\:ext-hidden {
            display: none !important;
        }

        .desktop\:ext-w-auto {
            width: auto !important;
        }

        .desktop\:ext-w-full {
            width: 100% !important;
        }

        .desktop\:ext-max-w-full {
            max-width: 100% !important;
        }

        .desktop\:ext-flex-1 {
            flex: 1 1 0% !important;
        }

        .desktop\:ext-flex-auto {
            flex: 1 1 auto !important;
        }

        .desktop\:ext-flex-initial {
            flex: 0 1 auto !important;
        }

        .desktop\:ext-flex-none {
            flex: none !important;
        }

        .desktop\:ext-flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .desktop\:ext-flex-shrink {
            flex-shrink: 1 !important;
        }

        .desktop\:ext-flex-grow-0 {
            flex-grow: 0 !important;
        }

        .desktop\:ext-flex-grow {
            flex-grow: 1 !important;
        }

        .desktop\:ext-list-none {
            list-style-type: none !important;
        }

        .desktop\:ext-grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-6 {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-7 {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-8 {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-9 {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-10 {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-11 {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-12 {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
        }

        .desktop\:ext-grid-cols-none {
            grid-template-columns: none !important;
        }

        .desktop\:ext-flex-row {
            flex-direction: row !important;
        }

        .desktop\:ext-flex-row-reverse {
            flex-direction: row-reverse !important;
        }

        .desktop\:ext-flex-col {
            flex-direction: column !important;
        }

        .desktop\:ext-flex-col-reverse {
            flex-direction: column-reverse !important;
        }

        .desktop\:ext-flex-wrap {
            flex-wrap: wrap !important;
        }

        .desktop\:ext-flex-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .desktop\:ext-flex-nowrap {
            flex-wrap: nowrap !important;
        }

        .desktop\:ext-items-start {
            align-items: flex-start !important;
        }

        .desktop\:ext-items-end {
            align-items: flex-end !important;
        }

        .desktop\:ext-items-center {
            align-items: center !important;
        }

        .desktop\:ext-items-baseline {
            align-items: baseline !important;
        }

        .desktop\:ext-items-stretch {
            align-items: stretch !important;
        }

        .desktop\:ext-justify-start {
            justify-content: flex-start !important;
        }

        .desktop\:ext-justify-end {
            justify-content: flex-end !important;
        }

        .desktop\:ext-justify-center {
            justify-content: center !important;
        }

        .desktop\:ext-justify-between {
            justify-content: space-between !important;
        }

        .desktop\:ext-justify-around {
            justify-content: space-around !important;
        }

        .desktop\:ext-justify-evenly {
            justify-content: space-evenly !important;
        }

        .desktop\:ext-justify-items-start {
            justify-items: start !important;
        }

        .desktop\:ext-justify-items-end {
            justify-items: end !important;
        }

        .desktop\:ext-justify-items-center {
            justify-items: center !important;
        }

        .desktop\:ext-justify-items-stretch {
            justify-items: stretch !important;
        }

        .desktop\:ext-justify-self-auto {
            justify-self: auto !important;
        }

        .desktop\:ext-justify-self-start {
            justify-self: start !important;
        }

        .desktop\:ext-justify-self-end {
            justify-self: end !important;
        }

        .desktop\:ext-justify-self-center {
            justify-self: center !important;
        }

        .desktop\:ext-justify-self-stretch {
            justify-self: stretch !important;
        }

        .desktop\:ext-p-0:not([style*="padding"]) {
            padding: 0 !important;
        }

        .desktop\:ext-p-base:not([style*="padding"]) {
            padding: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-p-lg:not([style*="padding"]) {
            padding: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-px-0:not([style*="padding"]) {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .desktop\:ext-px-base:not([style*="padding"]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-px-lg:not([style*="padding"]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
            padding-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-py-0:not([style*="padding"]) {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .desktop\:ext-py-base:not([style*="padding"]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important;
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-py-lg:not([style*="padding"]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important;
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-pt-0:not([style*="padding"]) {
            padding-top: 0 !important;
        }

        .desktop\:ext-pt-base:not([style*="padding"]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-pt-lg:not([style*="padding"]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-pr-0:not([style*="padding"]) {
            padding-right: 0 !important;
        }

        .desktop\:ext-pr-base:not([style*="padding"]) {
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-pr-lg:not([style*="padding"]) {
            padding-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-pb-0:not([style*="padding"]) {
            padding-bottom: 0 !important;
        }

        .desktop\:ext-pb-base:not([style*="padding"]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-pb-lg:not([style*="padding"]) {
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-pl-0:not([style*="padding"]) {
            padding-left: 0 !important;
        }

        .desktop\:ext-pl-base:not([style*="padding"]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .desktop\:ext-pl-lg:not([style*="padding"]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
        }

        .desktop\:ext-text-left {
            text-align: left !important;
        }

        .desktop\:ext-text-center {
            text-align: center !important;
        }

        .desktop\:ext-text-right {
            text-align: right !important;
        }
    }
</style>
<link rel="stylesheet" id="foundation-css-css" href="{{ asset('template/app/css/foundation.min.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="plugin-styles-wc-css" href="{{ asset('template/app/css/style.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="contact-form-7-css" href="{{ asset('template/app/css/styles.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('template/app/css/woocommerce-layout.css') }}"
    type="text/css" media="all">
<style id="woocommerce-layout-inline-css" type="text/css">
    .infinite-scroll .woocommerce-pagination {
        display: none;
    }
</style>
<link rel="stylesheet" id="woocommerce-smallscreen-css"
    href="{{ asset('template/app/css/woocommerce-smallscreen.css') }}" type="text/css"
    media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('template/app/css/woocommerce.css') }}"
    type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>
<link rel="stylesheet" id="zonar-child-style-css" href="{{ asset('template/app/css/style(1).css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="develop-css" href="{{ asset('template/app/css/develop.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="zonar-main-css" href="{{ asset('template/app/css/style(2).css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="zonar-plugins-css" href="{{ asset('template/app/css/plugins.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="zonar-style-css" href="{{ asset('template/app/css/style(3).css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="zonar-color-css" href="{{ asset('template/app/css/color.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="zonar-main-style-css" href="{{ asset('template/app/css/zonar-main-style.css') }}"
    type="text/css" media="all">
<link rel="stylesheet" id="zonar-woocommerce-css" href="{{ asset('template/app/css/zonar-woocommerce.css') }}"
    type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css" href="{{ asset('template/app/css/js_composer.min.css') }}"
    type="text/css" media="all">
<link rel="stylesheet" id="zonar_fonts-css" href="{{ asset('template/app/css/css.css') }}" type="text/css"
    media="all">
<link rel="stylesheet" id="jetpack_css-css" href="{{ asset('template/app/css/jetpack.css') }}" type="text/css"
    media="all">
<script type="text/javascript" src="{{ asset('template/app/js/jquery.min.js') }}" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('template/app/js/jquery-migrate.min.js') }}" id="jquery-migrate-js">
</script>
<script type="text/javascript" src="{{ asset('template/app/js/jquery.blockUI.min.js') }}" id="jquery-blockui-js">
</script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/hugostore.id\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('template/app/js/add-to-cart.min.js') }}" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="{{ asset('template/app/js/woocommerce-add-to-cart.js') }}"
    id="vc_woocommerce-add-to-cart-js-js"></script>
<script defer="" type="text/javascript" src="{{ asset('template/app/js/s-202309.js') }}" id="woocommerce-analytics-js">
</script>
<link rel="https://api.w.org/" href="https://hugostore.id/wp-json/">
<link rel="alternate" type="application/json" href="https://hugostore.id/wp-json/wp/v2/pages/370">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://hugostore.id/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://hugostore.id/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 6.1.1">
<meta name="generator" content="WooCommerce 7.3.0">
<link rel="canonical" href="https://hugostore.id/">
<link rel="shortlink" href="https://hugostore.id/">
<link rel="alternate" type="application/json+oembed"
    href="https://hugostore.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhugostore.id%2F">
<link rel="alternate" type="text/xml+oembed"
    href="https://hugostore.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhugostore.id%2F&amp;format=xml">
<meta name="generator" content="Redux 4.3.26">
<style>
    img#wpstats {
        display: none
    }
</style>
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
<meta name="generator"
    content="Powered by Slider Revolution 6.6.7 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
<script>
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };
</script>
<style id="zonar-dynamic-css" title="dynamic-css" class="redux-options-output">
    body {
        font-display: swap;
    }

    .main-about-text-area,
    div:not(.elementor-widget-text-editor) p {
        font-display: swap;
    }

    h1,
    .single-post .text-block h1,
    .wr-default-page h1 {
        font-display: swap;
    }

    h2,
    .single-post .text-block h2,
    .wr-default-page h2 {
        font-display: swap;
    }

    h3,
    .single-post .text-block h3,
    .wr-default-page h3 {
        font-display: swap;
    }

    h4,
    .single-post .text-block h4,
    .wr-default-page h4 {
        font-display: swap;
    }

    h5,
    .single-post .text-block h5,
    .wr-default-page h5 {
        font-display: swap;
    }

    h6,
    .single-post .text-block h6,
    .wr-default-page h6 {
        font-display: swap;
    }

    a {
        font-display: swap;
    }

    strong {
        font-display: swap;
    }

    b {
        font-display: swap;
    }

    .loading-text-container {
        font-display: swap;
    }

    .btn,
    .vc-section button,
    .custom-form button,
    .vc-section input[type=submit] {
        font-display: swap;
    }

    .start-btn {
        font-display: swap;
    }

    .page-subtitle {
        font-display: swap;
    }

    .menu-button-text,
    .share-btn span {
        font-display: swap;
    }

    .ns-text-logo {
        font-display: swap;
    }

    .sliding-menu a {
        font-display: swap;
    }

    .sliding-menu a:hover {
        font-display: swap;
    }

    .current-menu-parent>a,
    .current-menu-item>a {
        font-display: swap;
    }

    .header-contacts li,
    .contacts-btn {
        font-display: swap;
    }

    .page-scroll-nav_wrap li a,
    .fixed-bottom-panel .gallery-filters a,
    .pagination a {
        font-display: swap;
    }

    .half-hero-wrap h1,
    .hhw-vis.half-hero-wrap h1 {
        font-display: swap;
    }

    .half-hero-wrap h4 {
        font-display: swap;
    }

    .grid-carousel-title h3,
    .grid-carousel-title h3 a {
        font-display: swap;
    }

    .grid-carousel-title h4 {
        font-display: swap;
    }

    .hhw_header {
        font-display: swap;
    }

    .hero-decor-numb {
        font-display: swap;
    }

    .hero-facts-wrap .inline-facts h6 {
        font-display: swap;
    }

    .hero-facts-wrap .num {
        font-display: swap;
    }

    .hero_promo-title h4 {
        font-display: swap;
    }

    .hero_promo-title p {
        font-display: swap;
    }

    .fixed-column-wrap_title h2 {
        font-display: swap;
    }

    .fixed-column-wrap_title p {
        font-display: swap;
    }

    .scroll-notifer {
        font-display: swap;
    }

    .contact-details-title h2 {
        font-display: swap;
    }

    .contact-details ul li span {
        font-display: swap;
    }

    .contact-details ul li,
    .contact-details ul li a {
        font-display: swap;
    }

    .blog-btn {
        font-display: swap;
    }

    .blog-btn-filter ul li a {
        font-display: swap;
    }

    .post-det h3,
    .post-det h3 a {
        font-display: swap;
    }

    .post-header span,
    .post-header a {
        font-display: swap;
    }

    .post-link {
        font-display: swap;
    }

    .section-title h3 {
        font-display: swap;
    }

    .section-title p {
        font-display: swap;
    }

    .inline-facts-wrap h6 {
        font-display: swap;
    }

    .inline-facts-wrap .num {
        font-display: swap;
    }

    .team-info h3 {
        font-display: swap;
    }

    .team-info h4 {
        font-display: swap;
    }

    .team-box p {
        font-display: swap;
    }

    .testimonilas-text h3 {
        font-display: swap;
    }

    .testimonilas-text p {
        font-display: swap;
    }

    .custom-skillbar-title span {
        font-display: swap;
    }

    .skill-bar-percent {
        font-display: swap;
    }

    .piechart-holder h4 {
        font-display: swap;
    }

    .main-about h2 {
        font-display: swap;
    }

    .process-details h4 {
        font-display: swap;
    }

    .show-phdc span {
        font-display: swap;
    }

    .pdcw_list li {
        font-display: swap;
    }

    .srv-link-text h4 {
        font-display: swap;
    }

    .accordion a.toggle {
        font-display: swap;
    }

    .accordion-inner,
    .accordion-inner p {
        font-display: swap;
    }

    .project-details ul li,
    .project-details ul:after {
        font-display: swap;
    }

    .pr-subtitle {
        font-display: swap;
    }

    .blog-widgets .wp-block-group .wp-block-group__inner-container h2,
    .blog-widget-title {
        font-display: swap;
    }

    .widget.single-side-bar:not(.border-widget) ul li a {
        font-display: swap;
    }

    .widget .tagcloud a {
        font-display: swap;
    }
</style>
<style type="text/css" class="zonar-custom-dynamic-css">

</style>


<noscript>
    <style>
        .wpb_animate_when_almost_visible {
            opacity: 1;
        }
    </style>
</noscript>
