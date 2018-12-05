<?php

/* @websiteWidgets/social_buttons/templates/default.twig.html */
class __TwigTemplate_3bc8578cf4127bf2acee81c2a65e5d7c21875b40d5aa904de628d1aa5a15f5b4 extends Twig_Template
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
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-social-buttons moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"social_buttons\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo "\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "short"), "method"), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            // line 3
            echo "        ";
            $context["count"] = 0;
            // line 4
            echo "        <ul class=\"social-buttons-list\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 6
                echo "                ";
                if ($this->getAttribute($context["button"], "enabled", array())) {
                    // line 7
                    echo "                    <li class=\"social-button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "name", array()), "html", null, true);
                    echo "\"></li>
                    ";
                    // line 8
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 9
                    echo "                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
        ";
            // line 12
            if ((($context["count"] ?? null) == 0)) {
                // line 13
                echo "            <div class=\"moto-widget-empty\"></div>
        ";
            }
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "setCurrentPage", array(0 => ($context["currentPage"] ?? null)), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "setCurrentPage", array(0 => ($context["currentPage"] ?? null)), "method"), "html", null, true);
            echo "
        <ul class=\"social-buttons-list\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 20
                echo "                ";
                if ($this->getAttribute($context["button"], "enabled", array())) {
                    // line 21
                    echo "                    <li class=\"social-button\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "name", array()), "html", null, true);
                    echo "\" data-provider=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "provider", array()), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute(($context["currentWidget"] ?? null), "getSocialButtonTemplate", array(0 => $this->getAttribute($context["button"], "name", array()), 1 => $this->getAttribute($context["button"], "provider", array())), "method");
                    echo "</li>
                ";
                }
                // line 23
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
    ";
        }
        // line 26
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/social_buttons/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  109 => 24,  103 => 23,  93 => 21,  90 => 20,  86 => 19,  80 => 17,  74 => 15,  70 => 13,  68 => 12,  65 => 11,  59 => 10,  56 => 9,  54 => 8,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/social_buttons/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/social_buttons/templates/default.twig.html");
    }
}
