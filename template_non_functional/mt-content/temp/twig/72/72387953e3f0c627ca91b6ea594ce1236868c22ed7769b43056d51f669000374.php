<?php

/* @websiteWidgets/button/templates/default.twig.css */
class __TwigTemplate_e635ae73b38fb470c38d3a4aaf56f5eb3e7c87a292ce259ec715c3fcf88db729 extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "properties", array())));
        // line 18
        echo "
";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-button", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {
    .moto-widget-button-link {
        ";
        // line 21
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "button", array()), "desktop", array()), "base", array())), "method");
        echo "
        &:hover {
            ";
        // line 23
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "button", array()), "desktop", array()), "hover", array())), "method");
        echo "
            .moto-widget-button-label {
                ";
        // line 25
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", array()), "desktop", array()), "hover", array())), "method");
        echo "
            }
\t\t\t.moto-widget-theme-icon {
\t\t\t\t&:before {
                    ";
        // line 29
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "desktop", array()), "hover", array()), "before", array())), "method");
        echo "
\t\t\t\t}
\t\t\t}
        }
        .moto-widget-button-label {
            ";
        // line 34
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", array()), "desktop", array()), "base", array())), "method");
        echo "
        }
\t\t.moto-widget-theme-icon {
\t\t\t&:before {
                ";
        // line 38
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "desktop", array()), "base", array()), "before", array())), "method");
        echo "
\t\t\t}
\t\t}
    }
}
";
    }

    // line 1
    public function getprintStyle($__styles__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "styles" => $__styles__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 3
                echo "        ";
                if (($context["key"] == "before")) {
                    // line 4
                    echo "            &:before {
            ";
                    // line 5
                    echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute(($context["styles"] ?? null), $context["key"], array(), "array")), "method");
                    echo "
            }
        ";
                } elseif ((                // line 7
$context["key"] == "after")) {
                    // line 8
                    echo "            &:after {
            ";
                    // line 9
                    echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute(($context["styles"] ?? null), $context["key"], array(), "array")), "method");
                    echo "
            }
        ";
                } elseif ((                // line 11
$context["value"] != "")) {
                    // line 12
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": ";
                    echo $context["value"];
                    echo ";
        ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@websiteWidgets/button/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  114 => 12,  112 => 11,  107 => 9,  104 => 8,  102 => 7,  97 => 5,  94 => 4,  91 => 3,  86 => 2,  74 => 1,  64 => 38,  57 => 34,  49 => 29,  42 => 25,  37 => 23,  32 => 21,  27 => 19,  24 => 18,  22 => 17,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/button/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/button/templates/default.twig.css");
    }
}
