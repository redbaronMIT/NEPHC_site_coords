<?php

/* @websiteWidgets/audio_player/templates/default.twig.css */
class __TwigTemplate_0f754252629a788e57d5d7f08379ae9ecf42b27027455a612ba00e57d63f83d6 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-media-player", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo "{

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "buttons_active", array()), "desktop", array()), 1 => ".mejs-inner .mejs-controls .mejs-button.mejs-button_active button"), "method"), "html", null, true);
        echo "

    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "buttons_normal", array()), "desktop", array()), 1 => ".mejs-controls .mejs-button button, .mejs-controls .mejs-volume-button button, .mejs-overlay-button"), "method"), "html", null, true);
        echo "

    .mejs-controls {

        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "widget_container", array()), "desktop", array()), "base", array())), "method"), "html", null, true);
        echo "

        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", array()), "desktop", array()), "base", array()), 1 => ".mejs-time-current, .mejs-time-handle"), "method"), "html", null, true);
        echo "

        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "volume_bar", array()), "desktop", array()), "base", array()), 1 => ".mejs-horizontal-volume-current, .mejs-horizontal-volume-handle"), "method"), "html", null, true);
        echo "

        .mejs-time-loaded {
            background-color: fadeout(";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
        echo ", 75%);
        }
        .mejs-time-total {
            background-color: fadeout(";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
        echo ", 75%);
        }
        .mejs-time-handle {
            box-shadow: 0px 0px 4px 0px ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
        echo ";
        }
        .mejs-horizontal-volume-total {
            background-color: fadeout(";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "volume_bar", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
        echo ", 50%);
        }
        .mejs-horizontal-volume-handle {
            box-shadow: 0px 0px 4px 0px ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "volume_bar", array()), "desktop", array()), "base", array()), "background-color", array(), "array"), "html", null, true);
        echo ";
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/audio_player/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  75 => 27,  69 => 24,  63 => 21,  57 => 18,  51 => 15,  46 => 13,  41 => 11,  34 => 7,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/audio_player/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/audio_player/templates/default.twig.css");
    }
}
