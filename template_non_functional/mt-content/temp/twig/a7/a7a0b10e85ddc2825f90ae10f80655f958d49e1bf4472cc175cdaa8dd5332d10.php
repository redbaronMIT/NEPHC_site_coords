<?php

/* @websiteWidgets/menu/templates/default.twig.css */
class __TwigTemplate_a504b0fa8a389e1a1c865d94af9752913c27fdcba97ff4047d6b6bc21332e9b3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-menu", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {
    .moto-widget-menu-list {
        ";
        // line 21
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_container", array()), "desktop", array()), "base", array())), "method");
        echo "

        .moto-widget-menu-item {
            ";
        // line 24
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_delimiter", array()), "desktop", array()), "base", array())), "method");
        echo "

            &:hover {
                .moto-widget-menu-link-level-1 {
                    ";
        // line 28
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item", array()), "desktop", array()), "hover", array())), "method");
        echo "

                    .moto-widget-menu-link-arrow {
                        ";
        // line 31
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_icon", array()), "desktop", array()), "hover", array())), "method");
        echo "
                    }
                }
            }

            .moto-widget-menu-link-level-1 {
                ";
        // line 37
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item", array()), "desktop", array()), "base", array())), "method");
        echo "

                .moto-widget-menu-link-arrow {
                    ";
        // line 40
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_icon", array()), "desktop", array()), "base", array())), "method");
        echo "
                }

                &.moto-widget-menu-link-active {
                    ";
        // line 44
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_active", array()), "desktop", array()), "base", array())), "method");
        echo "

                    .moto-widget-menu-link-arrow {
                        ";
        // line 47
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_icon_active", array()), "desktop", array()), "base", array())), "method");
        echo "
                    }

                    &:hover {
                        ";
        // line 51
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_active", array()), "desktop", array()), "hover", array())), "method");
        echo "

                        .moto-widget-menu-link-arrow {
                            ";
        // line 54
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "menu_item_icon_active", array()), "desktop", array()), "hover", array())), "method");
        echo "
                        }
                    }
                }
            }
        }
    }

    .moto-widget-menu-sublist {
        ";
        // line 63
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_container", array()), "desktop", array()), "base", array())), "method");
        echo "

        .moto-widget-menu-item {
            &:hover {
                > .moto-widget-menu-link {
                    ";
        // line 68
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item", array()), "desktop", array()), "hover", array())), "method");
        echo "
                    .moto-widget-menu-link-arrow {
                        ";
        // line 70
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item_icon", array()), "desktop", array()), "hover", array())), "method");
        echo "
                    }
                }
            }
            .moto-widget-menu-link {
                ";
        // line 75
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item", array()), "desktop", array()), "base", array())), "method");
        echo "
                &.moto-widget-menu-link-active {
                    ";
        // line 77
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item_active", array()), "desktop", array()), "base", array())), "method");
        echo "
                    .moto-widget-menu-link-arrow {
                        ";
        // line 79
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item_active_icon", array()), "desktop", array()), "base", array())), "method");
        echo "
                    }
                    &:hover {
                        ";
        // line 82
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item_active", array()), "desktop", array()), "hover", array())), "method");
        echo "
                        .moto-widget-menu-link-arrow {
                            ";
        // line 84
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item_active_icon", array()), "desktop", array()), "hover", array())), "method");
        echo "
                        }
                    }
                }
            }
            .moto-widget-menu-link-arrow {
                ";
        // line 90
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "sub_menu_item_icon", array()), "desktop", array()), "base", array())), "method");
        echo "
            }
        }
    }

    .moto-widget-menu-toggle-btn {
        ";
        // line 96
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_icon", array()), "mobile", array()), "base", array())), "method");
        echo "
    }

    &.moto-widget-menu-mobile-open {
        @media screen and (max-width: @const_media_mobile-h_max_width) {
            .moto-widget-menu-toggle-btn {
                ";
        // line 102
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_icon_active", array()), "mobile", array()), "base", array())), "method");
        echo "
            }

            .moto-widget-menu-list {
                ";
        // line 106
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_menu_container", array()), "mobile", array()), "base", array())), "method");
        echo "

                .moto-widget-menu-item {
                    ";
        // line 109
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_menu_item_delimiter", array()), "mobile", array()), "base", array())), "method");
        echo "

                    .moto-widget-menu-link {
                        ";
        // line 112
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_menu_item", array()), "mobile", array()), "base", array())), "method");
        echo "

                        .moto-widget-menu-link-arrow {
                            ";
        // line 115
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_menu_item_icon", array()), "mobile", array()), "base", array())), "method");
        echo "
                        }

                        &.moto-widget-menu-link-active {
                            ";
        // line 119
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_menu_item_active", array()), "mobile", array()), "base", array())), "method");
        echo "

                            .moto-widget-menu-link-arrow {
                                ";
        // line 122
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_menu_item_icon_active", array()), "mobile", array()), "base", array())), "method");
        echo "
                            }
                        }
                    }
                }

                .moto-widget-menu-sublist {
                    ";
        // line 129
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_sub_menu_container", array()), "mobile", array()), "base", array())), "method");
        echo "
                    .moto-widget-menu-link {
                        ";
        // line 131
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_sub_menu_item", array()), "mobile", array()), "base", array())), "method");
        echo "
                        &.moto-widget-menu-link-active {
                            ";
        // line 133
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_sub_menu_item_active", array()), "mobile", array()), "base", array())), "method");
        echo "
                            .moto-widget-menu-link-arrow {
                                ";
        // line 135
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_sub_menu_item_active_icon", array()), "mobile", array()), "base", array())), "method");
        echo "
                            }
                        }
                    }
                    .moto-widget-menu-link-arrow {
                        ";
        // line 140
        echo $this->getAttribute($this, "printStyle", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "mobile_sub_menu_item_icon", array()), "mobile", array()), "base", array())), "method");
        echo "
                    }
                }
            }
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
        return "@websiteWidgets/menu/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 14,  296 => 12,  294 => 11,  289 => 9,  286 => 8,  284 => 7,  279 => 5,  276 => 4,  273 => 3,  268 => 2,  256 => 1,  244 => 140,  236 => 135,  231 => 133,  226 => 131,  221 => 129,  211 => 122,  205 => 119,  198 => 115,  192 => 112,  186 => 109,  180 => 106,  173 => 102,  164 => 96,  155 => 90,  146 => 84,  141 => 82,  135 => 79,  130 => 77,  125 => 75,  117 => 70,  112 => 68,  104 => 63,  92 => 54,  86 => 51,  79 => 47,  73 => 44,  66 => 40,  60 => 37,  51 => 31,  45 => 28,  38 => 24,  32 => 21,  27 => 19,  24 => 18,  22 => 17,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/menu/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/menu/templates/default.twig.css");
    }
}
