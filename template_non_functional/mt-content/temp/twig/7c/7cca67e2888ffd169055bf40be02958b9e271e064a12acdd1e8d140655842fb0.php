<?php

/* @websiteWidgets/back_to_top/templates/default.twig.css */
class __TwigTemplate_d6c247cd64d3cc54ea54893aea774a14457e27b2b03d2031d56083247bd34ebb extends Twig_Template
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
        // line 25
        echo "
";
        // line 26
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "properties", array())));
        // line 27
        $context["coordX"] = array("desktop" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["properties"] ?? null), "position", array()), "desktop", array()), "horizontal", array()), "tablet" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["properties"] ?? null), "position", array()), "tablet", array()), "horizontal", array()), "mobile-h" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 30
($context["properties"] ?? null), "position", array()), "mobile-h", array(), "array"), "horizontal", array()), "mobile-v" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 31
($context["properties"] ?? null), "position", array()), "mobile-v", array(), "array"), "horizontal", array()));
        // line 33
        $context["coordY"] = array("desktop" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 34
($context["properties"] ?? null), "position", array()), "desktop", array()), "vertical", array()), "tablet" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 35
($context["properties"] ?? null), "position", array()), "tablet", array()), "vertical", array()), "mobile-h" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 36
($context["properties"] ?? null), "position", array()), "mobile-h", array(), "array"), "vertical", array()), "mobile-v" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 37
($context["properties"] ?? null), "position", array()), "mobile-v", array(), "array"), "vertical", array()));
        // line 39
        echo "
";
        // line 40
        $context["widget_height"] = array("desktop" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 41
($context["properties"] ?? null), "box_model", array()), "desktop", array()), "base", array()), "height", array()), "tablet" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 42
($context["properties"] ?? null), "box_model", array()), "tablet", array()), "base", array()), "height", array()), "mobile-h" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 43
($context["properties"] ?? null), "box_model", array()), "mobile-h", array(), "array"), "base", array()), "height", array()), "mobile-v" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 44
($context["properties"] ?? null), "box_model", array()), "mobile-v", array(), "array"), "base", array()), "height", array()));
        // line 46
        $context["widget_width"] = array("desktop" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 47
($context["properties"] ?? null), "box_model", array()), "desktop", array()), "base", array()), "width", array()), "tablet" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 48
($context["properties"] ?? null), "box_model", array()), "tablet", array()), "base", array()), "width", array()), "mobile-h" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 49
($context["properties"] ?? null), "box_model", array()), "mobile-h", array(), "array"), "base", array()), "width", array()), "mobile-v" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 50
($context["properties"] ?? null), "box_model", array()), "mobile-v", array(), "array"), "base", array()), "width", array()));
        // line 52
        echo "
.moto-widget-back-to-top {
    &.moto-back-to-top-button_visible {
        -webkit-animation-name: ";
        // line 55
        if ($this->getAttribute(($context["properties"] ?? null), "animation", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? null), "animation", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo ";
        animation-name: ";
        // line 56
        if ($this->getAttribute(($context["properties"] ?? null), "animation", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? null), "animation", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo ";
    }
    ";
        // line 58
        if (($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "position", array()), "type", array()) == "top_left")) {
            // line 59
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 60
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 61
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 62
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 64
($context["properties"] ?? null), "position", array()), "type", array()) == "top_center")) {
            // line 65
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 66
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 67
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 68
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 70
($context["properties"] ?? null), "position", array()), "type", array()) == "top_right")) {
            // line 71
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 72
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 73
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 74
            echo $this->getAttribute($this, "get_coordinates", array(0 => "top", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 76
($context["properties"] ?? null), "position", array()), "type", array()) == "center_left")) {
            // line 77
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["widget_height"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 78
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["widget_height"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 79
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["widget_height"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 80
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["widget_height"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 82
($context["properties"] ?? null), "position", array()), "type", array()) == "center_right")) {
            // line 83
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["widget_height"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 84
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["widget_height"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 85
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["widget_height"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 86
            echo $this->getAttribute($this, "get_coordinates", array(0 => "center", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["widget_height"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 88
($context["properties"] ?? null), "position", array()), "type", array()) == "bottom_left")) {
            // line 89
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 90
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 91
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 92
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "left", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 94
($context["properties"] ?? null), "position", array()), "type", array()) == "bottom_center")) {
            // line 95
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 96
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 97
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 98
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "center", 2 => $this->getAttribute(($context["widget_width"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }

    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 100
($context["properties"] ?? null), "position", array()), "type", array()) == "bottom_right")) {
            // line 101
            echo "        ";
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "desktop", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "desktop", array())), "method");
            echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
            // line 102
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "tablet", array()), 3 => $this->getAttribute(($context["coordY"] ?? null), "tablet", array())), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
            // line 103
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-h", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-h", array(), "array")), "method");
            echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
            // line 104
            echo $this->getAttribute($this, "get_coordinates", array(0 => "bottom", 1 => "right", 2 => $this->getAttribute(($context["coordX"] ?? null), "mobile-v", array(), "array"), 3 => $this->getAttribute(($context["coordY"] ?? null), "mobile-v", array(), "array")), "method");
            echo " }
    ";
        }
        // line 106
        echo "
    ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
        echo "
    ";
        // line 108
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "tablet", array()), "base", array())) {
            // line 109
            echo "        @media screen and (max-width: @const_media_tablet_max_width) {
            ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
            echo "
        }
    ";
        }
        // line 113
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "mobile-h", array(), "array"), "base", array())) {
            // line 114
            echo "        @media screen and (max-width: @const_media_mobile-h_max_width) {
            ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
            echo "
        }
    ";
        }
        // line 118
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "mobile-v", array(), "array"), "base", array())) {
            // line 119
            echo "        @media screen and (max-width: @const_media_mobile-v_max_width) {
            ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "box_model", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
            echo "
        }
    ";
        }
        // line 123
        echo "
    ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "common_styles", array()), "desktop", array()), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "common_styles", array()), "tablet", array()), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "common_styles", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "common_styles", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-back-to-top-link"), "method"), "html", null, true);
        echo "
    }
    ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "desktop", array()), 1 => ".moto-widget-back-to-top-icon"), "method"), "html", null, true);
        echo "
}
";
    }

    // line 1
    public function getget_coordinates($__vertical_align__ = null, $__horizontal_align__ = null, $__coordX__ = null, $__coordY__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "vertical_align" => $__vertical_align__,
            "horizontal_align" => $__horizontal_align__,
            "coordX" => $__coordX__,
            "coordY" => $__coordY__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    ";
            // line 3
            if ((($context["vertical_align"] ?? null) == "top")) {
                // line 4
                echo "        ";
                if (($context["coordY"] ?? null)) {
                    echo "top: ";
                    echo twig_escape_filter($this->env, ($context["coordY"] ?? null), "html", null, true);
                    echo ";";
                }
                // line 5
                echo "        bottom: auto;
    ";
            } elseif ((            // line 6
($context["vertical_align"] ?? null) == "center")) {
                // line 7
                echo "        ";
                if (($context["coordY"] ?? null)) {
                    echo "top: calc(~\"50% - (";
                    echo twig_escape_filter($this->env, ($context["coordY"] ?? null), "html", null, true);
                    echo " / 2)\");";
                }
                // line 8
                echo "    ";
            } elseif ((($context["vertical_align"] ?? null) == "bottom")) {
                // line 9
                echo "        top: auto;
        ";
                // line 10
                if (($context["coordY"] ?? null)) {
                    echo "bottom: ";
                    echo twig_escape_filter($this->env, ($context["coordY"] ?? null), "html", null, true);
                    echo ";";
                }
                // line 11
                echo "    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ((($context["horizontal_align"] ?? null) == "left")) {
                // line 14
                echo "        right: auto;
        ";
                // line 15
                if (($context["coordX"] ?? null)) {
                    echo "left: ";
                    echo twig_escape_filter($this->env, ($context["coordX"] ?? null), "html", null, true);
                    echo ";";
                }
                // line 16
                echo "    ";
            } elseif ((($context["horizontal_align"] ?? null) == "center")) {
                // line 17
                echo "        ";
                if (($context["coordX"] ?? null)) {
                    echo "left: calc(~\"50% - (";
                    echo twig_escape_filter($this->env, ($context["coordX"] ?? null), "html", null, true);
                    echo " / 2)\");";
                }
                // line 18
                echo "        right: auto;
    ";
            } elseif ((            // line 19
($context["horizontal_align"] ?? null) == "right")) {
                // line 20
                echo "        ";
                if (($context["coordX"] ?? null)) {
                    echo "right: ";
                    echo twig_escape_filter($this->env, ($context["coordX"] ?? null), "html", null, true);
                    echo ";";
                }
                // line 21
                echo "        left: auto;
    ";
            }
            // line 23
            echo "
";
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
        return "@websiteWidgets/back_to_top/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 23,  397 => 21,  390 => 20,  388 => 19,  385 => 18,  378 => 17,  375 => 16,  369 => 15,  366 => 14,  364 => 13,  361 => 12,  358 => 11,  352 => 10,  349 => 9,  346 => 8,  339 => 7,  337 => 6,  334 => 5,  327 => 4,  325 => 3,  322 => 2,  307 => 1,  300 => 134,  295 => 132,  289 => 129,  283 => 126,  278 => 124,  275 => 123,  269 => 120,  266 => 119,  263 => 118,  257 => 115,  254 => 114,  251 => 113,  245 => 110,  242 => 109,  240 => 108,  236 => 107,  233 => 106,  228 => 104,  224 => 103,  220 => 102,  215 => 101,  213 => 100,  208 => 98,  204 => 97,  200 => 96,  195 => 95,  193 => 94,  188 => 92,  184 => 91,  180 => 90,  175 => 89,  173 => 88,  168 => 86,  164 => 85,  160 => 84,  155 => 83,  153 => 82,  148 => 80,  144 => 79,  140 => 78,  135 => 77,  133 => 76,  128 => 74,  124 => 73,  120 => 72,  115 => 71,  113 => 70,  108 => 68,  104 => 67,  100 => 66,  95 => 65,  93 => 64,  88 => 62,  84 => 61,  80 => 60,  75 => 59,  73 => 58,  64 => 56,  56 => 55,  51 => 52,  49 => 50,  48 => 49,  47 => 48,  46 => 47,  45 => 46,  43 => 44,  42 => 43,  41 => 42,  40 => 41,  39 => 40,  36 => 39,  34 => 37,  33 => 36,  32 => 35,  31 => 34,  30 => 33,  28 => 31,  27 => 30,  26 => 29,  25 => 28,  24 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/back_to_top/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/back_to_top/templates/default.twig.css");
    }
}
