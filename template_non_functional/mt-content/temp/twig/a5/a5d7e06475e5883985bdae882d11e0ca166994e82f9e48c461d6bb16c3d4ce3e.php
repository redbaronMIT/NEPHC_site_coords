<?php

/* @websiteWidgets/back_to_top/templates/base.html.twig */
class __TwigTemplate_ca4917e1794785787b1b8da7e41c4ab35e868510ee515f025ef9821ef8ea28eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", array()), "type", array()) == "custom")) {
            // line 2
            echo "    <div data-moto-back-to-top-button class=\"moto-widget-back-to-top moto-preset-default wow\">
        <a ng-click=\"toTop(\$event)\" class=\"moto-widget-back-to-top-link\">
            <span class=\"moto-widget-back-to-top-icon fa\"></span>
        </a>
    </div>
";
        } elseif (($this->getAttribute($this->getAttribute(        // line 7
($context["WEBSITE"] ?? null), "back_to_top_button", array()), "type", array()) == "theme")) {
            // line 8
            echo "    <div data-moto-back-to-top-button class=\"moto-back-to-top-button\">
        <a ng-click=\"toTop(\$event)\" class=\"moto-back-to-top-button-link\">
            <span class=\"moto-back-to-top-button-icon fa\"></span>
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/back_to_top/templates/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/back_to_top/templates/base.html.twig", "/var/www/html/template/mt-includes/widgets/back_to_top/templates/base.html.twig");
    }
}
