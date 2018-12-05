<?php

/* base.html.twig */
class __TwigTemplate_f7d0b0653600cdbfcd3b3743dd37bb8ddc5fdbb45b8ca3a2b1a2995b68c73187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            '__internal_1218d6c077e6eb146544fa1dc0450009d59f11180cf5eb149c98ef311556ecd0' => array($this, 'block___internal_1218d6c077e6eb146544fa1dc0450009d59f11180cf5eb149c98ef311556ecd0'),
            '__internal_b5471cd7af379d451867459c79c0d893a368320b8a981b15fc993a5c475ee119' => array($this, 'block___internal_b5471cd7af379d451867459c79c0d893a368320b8a981b15fc993a5c475ee119'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            '__internal_3c0a639ea86f099bb4a812bddb243b6116e33bb9694b7d7ea8ce7cfadc9b478e' => array($this, 'block___internal_3c0a639ea86f099bb4a812bddb243b6116e33bb9694b7d7ea8ce7cfadc9b478e'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ContentHelper"] = $this->loadTemplate("macros/helper.html.twig", "base.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getHtmlAttributeLangValue", array(), "method"), "html", null, true);
        echo "\" ";
        if ( !($context["isPreview"] ?? null)) {
            echo "data-ng-app=\"website\"";
        }
        echo ">
<head>
    ";
        // line 5
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.top");
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.head.top");
        echo "
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        if ( !($context["isPreview"] ?? null)) {
            // line 36
            echo "
    ";
            // line 37
            if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_analytics", array()), "id", array())) {
                // line 38
                echo "        <script type=\"text/javascript\" data-cfasync=\"false\">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '";
                // line 44
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_analytics", array()), "id", array())), "html", null, true);
                echo "', 'auto');
            ";
                // line 45
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_analytics", array()), "options", array()), "anonymize_ip", array())) {
                    echo "ga('set', 'anonymizeIp', true);";
                }
                // line 46
                echo "            ga('send', 'pageview');

        </script>
    ";
            }
            // line 50
            echo "
    ";
            // line 51
            if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", array()), "id", array())) {
                // line 52
                echo "        <script type=\"text/javascript\" data-cfasync=\"false\">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter";
                // line 56
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", array()), "id", array())), "html", null, true);
                echo " = new Ya.Metrika({
                            id: ";
                // line 57
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", array()), "id", array())), "html", null, true);
                echo ",
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                            ";
                // line 61
                if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", array()), "webvisor", array())) {
                    echo ",webvisor: true ";
                }
                // line 62
                echo "                            ";
                if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", array()), "track_hash", array())) {
                    echo ",trackHash: true ";
                }
                echo "});
                    } catch (e) {
                    }
                });
                var n = d.getElementsByTagName(\"script\")[0], s = d.createElement(\"script\"), f = function () {
                    n.parentNode.insertBefore(s, n);
                };
                s.type = \"text/javascript\";
                s.async = true;
                s.src = \"https://mc.yandex.ru/metrika/watch.js\";
                if (w.opera == \"[object Opera]\") {
                    d.addEventListener(\"DOMContentLoaded\", f, false);
                } else {
                    f();
                }
            })(document, window, \"yandex_metrika_callbacks\");
        </script>
        <noscript>
            <div><img src=\"https://mc.yandex.ru/watch/";
                // line 80
                echo twig_escape_filter($this->env, trim($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter_id", array())), "html", null, true);
                echo "\" style=\"position:absolute; left:-9999px;\" alt=\"\"/></div>
        </noscript>
    ";
            }
            // line 83
            echo "
    ";
        }
        // line 85
        echo "
    ";
        // line 86
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.head.bottom");
        echo "
    ";
        // line 87
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.bottom");
        echo "
    ";
        // line 88
        echo $this->getAttribute(($context["currentPage"] ?? null), "getCodeInjection", array(0 => "header"), "method");
        echo "
</head>
<body class=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getBackgroundClass", array(0 => "moto-background"), "method"), "html", null, true);
        if (($context["isPreview"] ?? null)) {
            echo " moto-preview moto-preview-overlay";
        }
        echo "\">
    ";
        // line 91
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.top");
        echo "
    ";
        // line 92
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.body.top");
        echo "
    ";
        // line 93
        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), array($this->env,         $this->renderBlock("__internal_3c0a639ea86f099bb4a812bddb243b6116e33bb9694b7d7ea8ce7cfadc9b478e", $context, $blocks), ($context["currentPage"] ?? null), "@body:content"));
        // line 96
        echo "    ";
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", array())) {
            // line 97
            echo "        ";
            $this->loadTemplate("@websiteWidgets/back_to_top/templates/base.html.twig", "base.html.twig", 97)->display($context);
            // line 98
            echo "    ";
        }
        // line 99
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "enabled", array()) || ($context["isPreview"] ?? null))) {
            // line 100
            echo "        <div class=\"moto-cookie-notification\" data-content-hash=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "content_hash", array()), "html", null, true);
            echo "\">
            ";
            // line 101
            if ((twig_in_filter("close", $this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "controls", array()), "visible", array())) ||  !$this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array(), "any", false, true), "controls", array(), "any", true, true))) {
                // line 102
                echo "            <button type=\"button\" class=\"moto-cookie-notification__button_close\" ng-click=\"closeNotification()\"><span class=\"fa fa-close\"></span></button>
            ";
            }
            // line 104
            echo "            <div class=\"moto-cookie-notification__container\">
                <div class=\"moto-cookie-notification__content moto-widget-text\">
                    ";
            // line 106
            $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "content", array())), "base.html.twig", 106)->display($context);
            // line 107
            echo "                </div>
                ";
            // line 108
            if (twig_in_filter("accept", $this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "controls", array()), "visible", array()))) {
                // line 109
                echo "                <div class=\"moto-cookie-notification__accept-button moto-widget moto-widget-button moto-align-center moto-preset-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "controls", array()), "accept", array()), "preset", array()), "html", null, true);
                echo "\">
                    <a href=\"#\" class=\"moto-widget-button-link moto-size-";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "controls", array()), "accept", array()), "size", array()), "html", null, true);
                echo "\" ng-click=\"closeNotification(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "controls", array()), "accept", array()), "cookie_lifetime", array()), "html", null, true);
                echo ")\">
                        <span class=\"fa moto-widget-theme-icon\"></span>
                        <span class=\"moto-widget-button-label\">";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()), "controls", array()), "accept", array()), "label", array()), "html", null, true);
                echo "</span>
                    </a>
                </div>
                ";
            }
            // line 116
            echo "            </div>
        </div>
    ";
        }
        // line 119
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 155
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.body.bottom");
        echo "
    ";
        // line 156
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.bottom");
        echo "
    ";
        // line 157
        echo $this->getAttribute(($context["currentPage"] ?? null), "getCodeInjection", array(0 => "footer"), "method");
        echo "
</body>
</html>";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 9
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "title_format", array())) {
            echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), array($this->env,             $this->renderBlock("__internal_1218d6c077e6eb146544fa1dc0450009d59f11180cf5eb149c98ef311556ecd0", $context, $blocks), ($context["page"] ?? null), "@head:title"));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "title", array()), "html", null, true);
        }
        echo "</title>
        ";
        // line 10
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->pageFavicon();
        echo "
        ";
        // line 11
        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), array($this->env,         $this->renderBlock("__internal_b5471cd7af379d451867459c79c0d893a368320b8a981b15fc993a5c475ee119", $context, $blocks), ($context["page"] ?? null), "@head:seo_meta_tags"));
        // line 16
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 18
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "google_webmaster_tools_tag", array())) {
            // line 19
            echo "            <meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, trim($this->getAttribute(($context["WEBSITE"] ?? null), "google_webmaster_tools_tag", array())), "html", null, true);
            echo "\"/>
        ";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_webmaster_code", array())) {
            // line 22
            echo "            <meta name=\"yandex-verification\" content=\"";
            echo twig_escape_filter($this->env, trim($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_webmaster_code", array())), "html", null, true);
            echo "\"/>
        ";
        }
        // line 24
        echo "    ";
    }

    // line 9
    public function block___internal_1218d6c077e6eb146544fa1dc0450009d59f11180cf5eb149c98ef311556ecd0($context, array $blocks = array())
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["WEBSITE"] ?? null), "title_format", array())), "base.html.twig", 9)->display($context);
    }

    // line 11
    public function block___internal_b5471cd7af379d451867459c79c0d893a368320b8a981b15fc993a5c475ee119($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        // line 13
        echo "                ";
        echo $this->getAttribute(($context["currentPage"] ?? null), "getSeoHtml", array(), "method");
        echo "
            ";
        // line 15
        echo "        ";
    }

    // line 26
    public function block_css($context, array $blocks = array())
    {
        // line 27
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/css/assets.min.css", true), "html", null, true);
        echo "\"/>
        <style>";
        // line 28
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileContent("@userFontsFile");
        echo "</style>
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@userStylesFile"), "html", null, true);
        echo "\" id=\"moto-website-style\"/>
        ";
        // line 30
        if (($context["isPreview"] ?? null)) {
            // line 31
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@editorStyles/editor.min.css"), "html", null, true);
            echo "\" />
        ";
        }
        // line 33
        echo "    ";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
    }

    // line 93
    public function block___internal_3c0a639ea86f099bb4a812bddb243b6116e33bb9694b7d7ea8ce7cfadc9b478e($context, array $blocks = array())
    {
        // line 94
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "    ";
    }

    // line 119
    public function block_js($context, array $blocks = array())
    {
        // line 120
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/js/website.assets.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    <script type=\"text/javascript\" data-cfasync=\"false\">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = '";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["WEBSITE"] ?? null), "address", array()), "html", null, true);
        echo "';
        websiteConfig.addressHash = '";
        // line 124
        echo twig_escape_filter($this->env, ($context["WEBSITE_ADDRESS_HASH"] ?? null), "html", null, true);
        echo "';
        websiteConfig.apiUrl = '";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "relativeUrl", array(0 => "@website/api.php"), "method"), "html", null, true);
        echo "';
        websiteConfig.preferredLocale = '";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["WEBSITE"] ?? null), "language_locale", array()), "html", null, true);
        echo "';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
        ";
        // line 128
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", array())) {
            // line 129
            echo "        websiteConfig.back_to_top_button = ";
            echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", array()));
            echo ";
        ";
        }
        // line 131
        echo "        websiteConfig.popup_preferences = ";
        echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "popup_preferences", array()));
        echo ";
        websiteConfig.lazy_loading = ";
        // line 132
        echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "lazy_loading", array()));
        echo ";
        websiteConfig.cookie_notification = ";
        // line 133
        echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", array()));
        echo ";
        ";
        // line 134
        if ((($context["LiveChat"] ?? null) && $this->getAttribute(($context["LiveChat"] ?? null), "isAllowOnPage", array(0 => ($context["currentPage"] ?? null)), "method"))) {
            // line 135
            echo "        angular.module('website.LiveChat.settings', ['ng']).constant('website.LiveChat.settings',  ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["LiveChat"] ?? null), "exportFrontendSettings", array(), "method"), "html", null, true);
            echo ");
        ";
        }
        // line 137
        echo "        angular.module('website.plugins', ";
        echo twig_jsonencode_filter($this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.application.plugins", array()));
        echo ");
    </script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/js/website.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    ";
        // line 140
        if (($context["GOOGLE_MAP_API_KEY"] ?? null)) {
            // line 141
            echo "    <script type=\"text/javascript\">\$.fn.motoGoogleMap.setApiKey('";
            echo twig_escape_filter($this->env, ($context["GOOGLE_MAP_API_KEY"] ?? null), "html", null, true);
            echo "');</script>
    ";
        }
        // line 143
        echo "    ";
        if (($context["isPreview"] ?? null)) {
            // line 144
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@editorApplication/editor.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
        <script type=\"text/javascript\" data-cfasync=\"false\">
            var widgetCacheOptions = {};
            try {
                ";
            // line 148
            echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->exportFrontendWidgetProperties();
            echo "
            } catch (e) {
            }
        </script>
        <div class=\"moto-editor__content-overlay\"></div>
    ";
        }
        // line 154
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 154,  450 => 148,  442 => 144,  439 => 143,  433 => 141,  431 => 140,  427 => 139,  421 => 137,  415 => 135,  413 => 134,  409 => 133,  405 => 132,  400 => 131,  394 => 129,  392 => 128,  387 => 126,  383 => 125,  379 => 124,  375 => 123,  368 => 120,  365 => 119,  361 => 95,  358 => 94,  355 => 93,  350 => 94,  346 => 33,  340 => 31,  338 => 30,  334 => 29,  330 => 28,  325 => 27,  322 => 26,  318 => 15,  313 => 13,  311 => 12,  308 => 11,  302 => 9,  298 => 24,  292 => 22,  289 => 21,  283 => 19,  281 => 18,  277 => 16,  275 => 11,  271 => 10,  263 => 9,  260 => 8,  257 => 7,  250 => 157,  246 => 156,  241 => 155,  238 => 119,  233 => 116,  226 => 112,  219 => 110,  214 => 109,  212 => 108,  209 => 107,  207 => 106,  203 => 104,  199 => 102,  197 => 101,  192 => 100,  189 => 99,  186 => 98,  183 => 97,  180 => 96,  178 => 93,  174 => 92,  170 => 91,  163 => 90,  158 => 88,  154 => 87,  150 => 86,  147 => 85,  143 => 83,  137 => 80,  113 => 62,  109 => 61,  102 => 57,  98 => 56,  92 => 52,  90 => 51,  87 => 50,  81 => 46,  77 => 45,  73 => 44,  65 => 38,  63 => 37,  60 => 36,  58 => 35,  55 => 34,  53 => 26,  50 => 25,  48 => 7,  44 => 6,  40 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/template/mt-includes/templates/base.html.twig");
    }
}
