<?php

/* macros/helper.html.twig */
class __TwigTemplate_bf38a9cc331680c6daa87d679b9fc2a47d2944e120625614862dfa3cd2f26d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_21a37e670969db633595add08be419c1ede3a5d62a8f98df061dc2a2f5f923ed' => array($this, 'block___internal_21a37e670969db633595add08be419c1ede3a5d62a8f98df061dc2a2f5f923ed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 2
    public function block___internal_21a37e670969db633595add08be419c1ede3a5d62a8f98df061dc2a2f5f923ed($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        if (is_string($this->getAttribute(($context["section"] ?? null), "content", array()))) {
            // line 4
            echo "            ";
            $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["section"] ?? null), "content", array())), "macros/helper.html.twig", 4)->display($context);
            // line 5
            echo "        ";
        } else {
            // line 6
            echo "            ";
            echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $this->getAttribute(($context["section"] ?? null), "content", array()));
            echo "
        ";
        }
        // line 8
        echo "    ";
    }

    // line 1
    public function getRenderPageSection($__section__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "section" => $__section__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), array($this->env,             $this->renderBlock("__internal_21a37e670969db633595add08be419c1ede3a5d62a8f98df061dc2a2f5f923ed", $context, $blocks), ($context["section"] ?? null), ($context["type"] ?? null)));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/helper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 2,  44 => 1,  40 => 8,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "macros/helper.html.twig", "/var/www/html/template/mt-includes/templates/macros/helper.html.twig");
    }
}
