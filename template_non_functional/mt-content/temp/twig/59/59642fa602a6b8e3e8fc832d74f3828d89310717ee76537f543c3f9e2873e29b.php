<?php

/* @websiteWidgets/pagination/templates/default.twig.css */
class __TwigTemplate_2b8fd9e35ced609275cc0331919001f5a13dd83267d06ab92e0a6cf1f4148e65 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-pagination", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {
    ";
        // line 20
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", array()), "desktop", array()), "base", array())), "method");
        echo "
    .moto-pagination-item, li {
        ";
        // line 22
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), "base", array())), "method");
        echo "
    }
    .moto-pagination-link, a {
        ";
        // line 25
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link", array()), "desktop", array()), "base", array())), "method");
        echo "
        &:hover {
            ";
        // line 27
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link", array()), "desktop", array()), "hover", array())), "method");
        echo "
        }
    }
    .moto-pagination-link_active, li.active a {
        ";
        // line 31
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link_active", array()), "desktop", array()), "base", array())), "method");
        echo "
        &:hover {
            ";
        // line 33
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link_active", array()), "desktop", array()), "base", array())), "method");
        echo "
        }
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
        return "@websiteWidgets/pagination/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 14,  108 => 12,  106 => 11,  101 => 9,  98 => 8,  96 => 7,  91 => 5,  88 => 4,  85 => 3,  80 => 2,  68 => 1,  59 => 33,  54 => 31,  47 => 27,  42 => 25,  36 => 22,  31 => 20,  27 => 19,  24 => 18,  22 => 17,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/pagination/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/pagination/templates/default.twig.css");
    }
}
