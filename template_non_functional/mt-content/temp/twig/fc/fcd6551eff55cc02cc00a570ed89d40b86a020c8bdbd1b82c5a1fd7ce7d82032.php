<?php

/* @websiteWidgets/slider/templates/default.twig.css */
class __TwigTemplate_0ff5f5f63d654a5f4b771f1c76e819d59e29ec2177346aaddab0ff2ecc89f6ee extends Twig_Template
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
        // line 24
        echo "
";
        // line 25
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "properties", array())));
        // line 26
        echo "
";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-slider", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {
";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array()), "background-color", array(), "array") != "")) {
            // line 29
            echo "    .bx-caption {
        background-color: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
            echo ";
    }
";
        }
        // line 33
        if ($this->getAttribute(($context["FEATURES"] ?? null), "theme_widget_slider__html_caption", array())) {
            // line 34
            echo "    .bx-caption_text {
        ";
            // line 35
            echo $this->getAttribute($this, "printSliderCaption", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array())), "method");
            echo "
    }
";
        } else {
            // line 38
            echo "    .bx-caption {
        ";
            // line 39
            echo $this->getAttribute($this, "printSliderCaption", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array())), "method");
            echo "
    }
";
        }
        // line 42
        echo "    .bx-controls-direction {
        .bx-prev, .bx-next {
            ";
        // line 44
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", array()), "desktop", array()), "base", array())), "method");
        echo "
            &:hover {
                ";
        // line 46
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", array()), "desktop", array()), "hover", array())), "method");
        echo "
            }
        }
    }
    .bx-pager-link {
        ";
        // line 51
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", array()), "desktop", array()), "base", array())), "method");
        echo "
        &:hover {
            ";
        // line 53
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", array()), "desktop", array()), "hover", array())), "method");
        echo "
        }
        &.active {
            ";
        // line 56
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "current_pagination", array()), "desktop", array()), "base", array())), "method");
        echo "
            &:hover {
                ";
        // line 58
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "current_pagination", array()), "desktop", array()), "hover", array())), "method");
        echo "
            }
        }
    }
}

";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array()), "carousel-background-color", array(), "array") != "")) {
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget.moto-widget-carousel", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
            echo " {
    .moto-widget-carousel-caption {
        background-color: ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array()), "carousel-background-color", array(), "array"), "html", null, true);
            echo ";
    }
}
";
        }
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

    // line 17
    public function getprintSliderCaption($__styles__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "styles" => $__styles__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "        ";
                if (((($context["value"] != "") && ($context["key"] != "background-color")) && ($context["key"] != "carousel-background-color"))) {
                    // line 20
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": ";
                    echo $context["value"];
                    echo ";
        ";
                }
                // line 22
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
        return "@websiteWidgets/slider/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 22,  210 => 20,  207 => 19,  202 => 18,  190 => 17,  171 => 14,  163 => 12,  161 => 11,  156 => 9,  153 => 8,  151 => 7,  146 => 5,  143 => 4,  140 => 3,  135 => 2,  123 => 1,  114 => 67,  109 => 65,  107 => 64,  98 => 58,  93 => 56,  87 => 53,  82 => 51,  74 => 46,  69 => 44,  65 => 42,  59 => 39,  56 => 38,  50 => 35,  47 => 34,  45 => 33,  39 => 30,  36 => 29,  34 => 28,  30 => 27,  27 => 26,  25 => 25,  22 => 24,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/slider/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/slider/templates/default.twig.css");
    }
}
