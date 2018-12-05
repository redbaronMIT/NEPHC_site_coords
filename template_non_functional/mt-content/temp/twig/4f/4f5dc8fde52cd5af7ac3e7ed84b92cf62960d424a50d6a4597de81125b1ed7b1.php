<?php

/* __string_template__bb0d34ddce70d35f8ec958e499ad26ea9fcf6939fb5a633cc5ead1d75c3f41ef */
class __TwigTemplate_00e0319ec29a6617b915351457b814f036f51edf766256be21bb68790f08796f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "__string_template__bb0d34ddce70d35f8ec958e499ad26ea9fcf6939fb5a633cc5ead1d75c3f41ef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bb0d34ddce70d35f8ec958e499ad26ea9fcf6939fb5a633cc5ead1d75c3f41ef", "");
    }
}
