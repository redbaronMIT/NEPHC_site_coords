<?php

/* @websiteWidgets/tile_gallery/templates/default.twig.css */
class __TwigTemplate_2a3f1e8889cd15acb8562c9fda44a30205fa0c066b921db70e6d903785f75e42 extends Twig_Template
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
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-tile-gallery", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item"), "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
    .moto-widget-tile-gallery__item:hover {
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), "hover", array())), "method"), "html", null, true);
        echo "
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item"), "method"), "html", null, true);
        echo "
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
        .moto-widget-tile-gallery__item:hover {
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "tablet", array()), "hover", array())), "method"), "html", null, true);
        echo "
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "tablet", array()), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "tablet", array()), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "tablet", array()), "hover", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
        }
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item"), "method"), "html", null, true);
        echo "
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
        .moto-widget-tile-gallery__item:hover {
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-h", array(), "array"), "hover", array())), "method"), "html", null, true);
        echo "
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "mobile-h", array(), "array"), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "mobile-h", array(), "array"), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "mobile-h", array(), "array"), "hover", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
        }
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item"), "method"), "html", null, true);
        echo "
        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
        .moto-widget-tile-gallery__item:hover {
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-v", array(), "array"), "hover", array())), "method"), "html", null, true);
        echo "
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", array()), "mobile-v", array(), "array"), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer"), "method"), "html", null, true);
        echo "
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer_icon", array()), "mobile-v", array(), "array"), "hover", array()), 1 => ".moto-widget-tile-gallery__item-layer-icon"), "method"), "html", null, true);
        echo "
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", array()), "mobile-v", array(), "array"), "hover", array()), 1 => ".moto-widget-tile-gallery__item-caption"), "method"), "html", null, true);
        echo "
        }
    }

    ";
        // line 52
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "caption_position", array()), "type", array()) == "absolute")) {
            // line 53
            echo "        .moto-widget-tile-gallery__item-caption {
            position: absolute;
            width: 100%;
            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "caption_position", array()), "direction", array()), "html", null, true);
            echo ": -100%;
            ";
            // line 57
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "caption_position", array()), "direction", array()) == "left") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "caption_position", array()), "direction", array()) == "right"))) {
                // line 58
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "caption_position", array()), "vertical_side", array()), "html", null, true);
                echo ": 0;
            ";
            } else {
                // line 60
                echo "            left: 0;
            right: 0;
            ";
            }
            // line 63
            echo "        }
        .moto-widget-tile-gallery__item:hover {
            .moto-widget-tile-gallery__item-caption {
                ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "caption_position", array()), "direction", array()), "html", null, true);
            echo ": 0;
            }
        }
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "type", array()) == "padding") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "type", array()) == "margin"))) {
            // line 72
            echo "        .moto-widget-tile-gallery__item-layer {
            margin: 0;
            padding: 0;
            ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "type", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "direction", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "value", array()), "html", null, true);
            echo ";
        }
        .moto-widget-tile-gallery__item:hover {
            .moto-widget-tile-gallery__item-layer {
                ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "type", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "layer_appearance", array()), "direction", array()), "html", null, true);
            echo ": 0;
            }
        }
    ";
        }
        // line 83
        echo "}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/tile_gallery/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 83,  229 => 79,  218 => 75,  213 => 72,  211 => 71,  208 => 70,  201 => 66,  196 => 63,  191 => 60,  185 => 58,  183 => 57,  179 => 56,  174 => 53,  172 => 52,  165 => 48,  161 => 47,  157 => 46,  153 => 45,  148 => 43,  144 => 42,  140 => 41,  136 => 40,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/tile_gallery/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/tile_gallery/templates/default.twig.css");
    }
}
