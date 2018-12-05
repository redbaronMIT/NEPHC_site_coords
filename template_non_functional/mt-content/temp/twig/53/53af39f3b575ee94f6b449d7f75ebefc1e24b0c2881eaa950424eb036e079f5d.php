<?php

/* layouts/default.html */
class __TwigTemplate_97b38b022565759c8fb848cd6421509174d1364bbc7fd12557d4ddbc30abce68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "layouts/default.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <meta charset=\"utf-8\">

    <title ng-bind-template=\"";
        // line 6
        echo "{{";
        echo "pageTitle";
        echo "}}";
        echo " - ";
        echo "{{'BRAND.CONTROL_PANEL.NAME'|translate}}";
        echo "\">Control Panel</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
    <meta name=\"viewport\" viewport-initial-scale content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl($this->getAttribute(($context["BRAND"] ?? null), "getMediaPath", array(0 => "favicon.ico"), "method"), true), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/css/font-awesome.min.css", true), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        // line 16
        echo "    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemAssets/assets.min.css", true), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminStyles/style.css", true), "html", null, true);
        echo "\" />
<style>
    .spinner-icon {
        background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl($this->getAttribute(($context["BRAND"] ?? null), "getMediaPath", array(0 => "loader.gif"), "method"), true), "html", null, true);
        echo ");
    }
    #loading-bar-spinner {
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", array(0 => "cp_loading_backdrop", 1 => "background: rgba(0, 0, 0, .15);"), "method"), "html", null, true);
        echo "
    }
    #loading-bar .bar {
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", array(0 => "cp_loading_bar", 1 => "background: #ff9000; height: 2px;"), "method"), "html", null, true);
        echo "
    }
</style>
";
    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemAssets/assets.min.js", true), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "        <div ng-show=\"loader.status()\">
            <div class=\"loader\"></div>
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loader"] ?? null), "message", array(), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"moto-ui-notification-panel dark-ui moto-ui-notification-panel_ie-warning\" ng-cloak>
            <p class=\"moto-ui-notification-panel-message h6 text-center\">";
        // line 43
        echo "{{'COMMON.TEXT.BROWSER_NOT_SUPPORTED_MESSAGE'|translate}}";
        echo "</p>
        </div>
        <div class=\"moto-ui-notification-panel dark-ui moto-ui-notification-panel_php-warning\" ng-if=\"showPHPVersionPanel\" ng-cloak>
            <p class=\"moto-ui-notification-panel-message h6\">";
        // line 46
        echo "{{'COMMON.TEXT.PHP_5_5_SUPPORT_EXPIRY_MESSAGE'|translate}}";
        echo "</p>
            <a href class=\"moto-ui-notification-panel-close-btn\" ng-click=\"hidePHPExpiryPanel()\">&times;</a>
        </div>
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  139 => 49,  134 => 50,  132 => 49,  126 => 46,  120 => 43,  114 => 40,  110 => 38,  107 => 37,  100 => 34,  97 => 33,  89 => 27,  83 => 24,  77 => 21,  71 => 18,  67 => 17,  64 => 16,  61 => 15,  55 => 11,  51 => 10,  40 => 6,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/default.html", "/var/www/html/template/mt-admin/views/layouts/default.html");
    }
}
