<?php

/* @layoutTemplates/blog/index.html.twig */
class __TwigTemplate_549deb190c6e9d9585e863a3f5a116fd30c8721ce60598703f9fe87c2490ccde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@layoutTemplates/blog/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " ";
        // line 4
        echo "
";
        // line 5
        $context["header"] = $this->getAttribute(($context["currentPage"] ?? null), "getSection", array(0 => "header"), "method");
        // line 6
        $context["footer"] = $this->getAttribute(($context["currentPage"] ?? null), "getSection", array(0 => "footer"), "method");
        // line 7
        echo "
    <div class=\"page\">

";
        // line 10
        if (($context["header"] ?? null)) {
            // line 11
            echo "        <header id=\"section-header\" class=\"header moto-section\" data-widget=\"section\" data-container=\"section\">
            ";
            // line 12
            echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["header"] ?? null), 1 => "header"), "method");
            echo "
        </header>
";
        }
        // line 15
        echo "
        <section id=\"section-content\" class=\"content page-";
        // line 16
        echo $this->getAttribute(($context["currentPage"] ?? null), "id", array());
        echo " moto-section\" data-widget=\"section\" data-container=\"section\">
            ";
        // line 17
        echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["currentPage"] ?? null), 1 => $this->getAttribute(($context["currentPage"] ?? null), "type", array())), "method");
        echo "
        </section>
    </div>

";
        // line 21
        if (($context["footer"] ?? null)) {
            // line 22
            echo "    <footer id=\"section-footer\" class=\"footer moto-section\" data-widget=\"section\" data-container=\"section\"";
            if (($this->getAttribute($this->getAttribute(($context["footer"] ?? null), "properties", array()), "sticky", array()) &&  !($context["isPreview"] ?? null))) {
                echo " moto-sticky=\"{mode:'smallHeight', direction:'bottom'}\"";
            }
            echo ">
        ";
            // line 23
            echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["footer"] ?? null), 1 => "footer"), "method");
            echo "
    </footer>
";
        }
        // line 26
        echo "
";
        // line 27
        echo " ";
    }

    public function getTemplateName()
    {
        return "@layoutTemplates/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  84 => 26,  78 => 23,  71 => 22,  69 => 21,  62 => 17,  58 => 16,  55 => 15,  49 => 12,  46 => 11,  44 => 10,  39 => 7,  37 => 6,  35 => 5,  32 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layoutTemplates/blog/index.html.twig", "/var/www/html/template/mt-includes/templates/layouts/blog/index.html.twig");
    }
}
