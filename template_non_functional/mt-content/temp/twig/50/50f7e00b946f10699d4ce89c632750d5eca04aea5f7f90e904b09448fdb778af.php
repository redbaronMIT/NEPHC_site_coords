<?php

/* @websiteWidgets/cookie_notification/templates/default.twig.css */
class __TwigTemplate_ea873b9a60899ccbfa1a496c8b8eb14b8a25782ef1fcd341bdad714b91ff542c extends Twig_Template
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
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "properties", array())));
        // line 2
        echo ".moto-cookie-notification {
    background-color: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
        echo "
}

.moto-cookie-notification__button_close {
    color: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "desktop", array()), "base", array()), "color", array()), "html", null, true);
        echo ";
    &:hover {
         color: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "desktop", array()), "hover", array()), "color", array()), "html", null, true);
        echo ";
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/cookie_notification/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/cookie_notification/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/cookie_notification/templates/default.twig.css");
    }
}
