<?php

/* @websiteWidgets/tabs/templates/default.twig.css */
class __TwigTemplate_007861a77f46ae289d010476ef4860a367f078e7a82fd34f412fa512899548b1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-tabs", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", array()), "desktop", array()), 1 => ".moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", array()), "desktop", array()), 1 => ".moto-widget-tabs__header_mobile"), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", array()), "desktop", array()), 1 => ".moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", array()), "desktop", array()), 1 => ".moto-widget-tabs__items-wrapper"), "method"), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), 1 => ".moto-widget-tabs__item"), "method"), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "desktop", array()), 1 => ".moto-widget-tabs__content"), "method"), "html", null, true);
        echo "

    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tabs__header"), "method"), "html", null, true);
        echo "
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "

    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", array()), "tablet", array()), 1 => ".moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", array()), "tablet", array()), 1 => ".moto-widget-tabs__header_mobile"), "method"), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", array()), "tablet", array()), 1 => ".moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", array()), "tablet", array()), 1 => ".moto-widget-tabs__items-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "tablet", array()), 1 => ".moto-widget-tabs__item"), "method"), "html", null, true);
        echo "
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "tablet", array()), 1 => ".moto-widget-tabs__content"), "method"), "html", null, true);
        echo "

        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header"), "method"), "html", null, true);
        echo "
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-tabs__header_mobile"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-tabs__items-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-tabs__item"), "method"), "html", null, true);
        echo "
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-tabs__content"), "method"), "html", null, true);
        echo "

        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header"), "method"), "html", null, true);
        echo "
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-tabs__header_mobile"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-tabs__items-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-tabs__item"), "method"), "html", null, true);
        echo "
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-tabs__content"), "method"), "html", null, true);
        echo "

        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header"), "method"), "html", null, true);
        echo "
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
    }

    .moto-widget-tabs__header:hover {
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "desktop", array()), "hover", array())), "method"), "html", null, true);
        echo "
        ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
        ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
    }

    .moto-widget-tabs__header.moto-widget-tabs__header_opened {
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "desktop", array()), "base", array())), "method"), "html", null, true);
        echo "
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
        ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
        @media screen and (max-width: @const_media_tablet_max_width) {
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "tablet", array()), "base", array())), "method"), "html", null, true);
        echo "
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
        }
        @media screen and (max-width: @const_media_mobile-h_max_width) {
            ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "mobile-h", array(), "array"), "base", array())), "method"), "html", null, true);
        echo "
            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
        }
        @media screen and (max-width: @const_media_mobile-v_max_width) {
            ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "mobile-v", array(), "array"), "base", array())), "method"), "html", null, true);
        echo "
            ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
        }
        &:hover {
            ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "desktop", array()), "hover", array())), "method"), "html", null, true);
        echo "
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tabs__header-title"), "method"), "html", null, true);
        echo "
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-tabs__header-icon"), "method"), "html", null, true);
        echo "
        }
    }

    ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", array()), "desktop", array()), "base", array()), 1 => "&.moto-widget-tabs_type-vertical .moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
    ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", array()), "desktop", array()), "base", array()), 1 => "&.moto-widget-tabs_type-vertical .moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__headers-wrapper"), "method"), "html", null, true);
        echo "
        ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__header_desktop"), "method"), "html", null, true);
        echo "
    }

    .moto-widget-tabs__header_desktop:last-child,
    .moto-widget-tabs__header-icon:last-child,
    .moto-widget-tabs__headers-wrapper_icon-right .moto-widget-tabs__header-icon,
    .moto-widget-tabs__headers-wrapper_icon-right + .moto-widget-tabs__items-wrapper .moto-widget-tabs__header-icon,
    &.moto-widget-tabs_type-vertical .moto-widget-tabs__header_desktop,
    &.moto-widget-tabs_type-vertical_right .moto-widget-tabs__headers-wrapper {
        margin-right: 0;
    }

    .moto-widget-tabs__headers-wrapper_icon-left .moto-widget-tabs__header-icon,
    .moto-widget-tabs__headers-wrapper_icon-left + .moto-widget-tabs__items-wrapper .moto-widget-tabs__header-icon,
    &.moto-widget-tabs_type-vertical_left .moto-widget-tabs__headers-wrapper {
        margin-left: 0;
    }

    .moto-widget-tabs__item:last-child,
    &.moto-widget-tabs_type-vertical .moto-widget-tabs__headers-wrapper,
    &.moto-widget-tabs_type-vertical .moto-widget-tabs__header_desktop:last-child {
        margin-bottom: 0;
    }

    ";
        // line 121
        if ($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "stickyHeaders", array())) {
            // line 122
            echo "    &.moto-widget-tabs_type-horizontal {
        .moto-widget-tabs__headers-wrapper {
            margin-bottom: -";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "desktop", array()), "base", array()), "border-top-width", array(), "array"), "html", null, true);
            echo ";
        }
        .moto-widget-tabs__header.moto-widget-tabs__header_opened {
            @media screen and (max-width: @const_media_mobile-h_max_width) {
                margin-bottom: -";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "desktop", array()), "base", array()), "border-top-width", array(), "array"), "html", null, true);
            echo ";
            }
        }
    }

    &.moto-widget-tabs_type-vertical_left {
        .moto-widget-tabs__headers-wrapper {
            margin-right: -";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "desktop", array()), "base", array()), "border-left-width", array(), "array"), "html", null, true);
            echo ";
        }
    }
    &.moto-widget-tabs_type-vertical_right {
        .moto-widget-tabs__headers-wrapper {
            margin-left: -";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", array()), "desktop", array()), "base", array()), "border-right-width", array(), "array"), "html", null, true);
            echo ";
        }
    }
    ";
        }
        // line 144
        echo "}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/tabs/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 144,  362 => 140,  354 => 135,  344 => 128,  337 => 124,  333 => 122,  331 => 121,  304 => 97,  300 => 96,  294 => 93,  290 => 92,  284 => 89,  280 => 88,  275 => 86,  271 => 85,  264 => 81,  260 => 80,  256 => 79,  250 => 76,  246 => 75,  242 => 74,  236 => 71,  232 => 70,  228 => 69,  222 => 66,  218 => 65,  214 => 64,  209 => 62,  205 => 61,  201 => 60,  194 => 56,  190 => 55,  186 => 54,  179 => 50,  175 => 49,  171 => 48,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  140 => 38,  136 => 37,  132 => 36,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  62 => 14,  58 => 13,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/tabs/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/tabs/templates/default.twig.css");
    }
}
