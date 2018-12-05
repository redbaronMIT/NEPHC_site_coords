<?php

/* @websiteWidgets/blog/templates/recent_posts.twig.html */
class __TwigTemplate_85402dca0efad95fff929813a8b62c17c9e868a71e5416f1f3c225721753c0b6 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-blog-recent_posts moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"blog.recent_posts\">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-cover\"></div>";
        }
        // line 3
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "posts", array()), "meta", array()), "total", array()) > 0)) {
            // line 4
            echo "        <div class=\"moto-widget-blog-recent_posts-title\">
            <div class=\"moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto\" data-preset=\"default\" data-spacing=\"aasa\">
                <div class=\"moto-widget-text-content moto-widget-text-editable\">
                    <p class=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "heading.font_style", 1 => "moto-text_system_7"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "label", array()), "Recent Posts")) : ("Recent Posts")), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
        <ul class=\"moto-widget-blog-recent_posts-list\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "posts", array()), "records", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 13
                echo "                <li class=\"moto-widget-blog-recent_posts-item\">
                    ";
                // line 14
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "src", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "type", array()) == "image"))) {
                    // line 15
                    echo "                        ";
                    $context["featureImagePreset"] = $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "feature_image.preset", 1 => "default"), "method");
                    // line 16
                    echo "                        <div class=\"moto-widget-blog-recent_posts-item-preview\">
                            <div class=\"moto-widget moto-widget-image moto-preset-";
                    // line 17
                    echo twig_escape_filter($this->env, ($context["featureImagePreset"] ?? null), "html", null, true);
                    echo " moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto\" data-preset=\"";
                    echo twig_escape_filter($this->env, ($context["featureImagePreset"] ?? null), "html", null, true);
                    echo "\" data-spacing=\"sasa\">
                                <a href=\"";
                    // line 18
                    if (($context["isPreview"] ?? null)) {
                        echo "#";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getFullUrl", array(), "method"), "html", null, true);
                    }
                    echo "\" class=\"moto-widget-image-link moto-link\">
                                    <img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "img", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "src", array())), "method"), "html", null, true);
                    echo "\"";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "alt", array())) {
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "alt", array()), "html", null, true);
                        echo "\"";
                    }
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "title", array())) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "title", array()), "html", null, true);
                        echo "\"";
                    }
                    echo " class=\"moto-widget-image-picture\">
                                </a>
                            </div>
                        </div>
                    ";
                }
                // line 24
                echo "                    <div class=\"moto-widget-blog-recent_posts-item-title\">
                        <div class=\"moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto\" data-preset=\"default\" data-spacing=\"aasa\">
                            <div class=\"moto-widget-text-content moto-widget-text-editable\">
                                <h2 class=\"blog-post-title ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "title.font_style", 1 => "moto-text_system_9"), "method"), "html", null, true);
                echo "\">
                                    <a href=\"";
                // line 28
                if (($context["isPreview"] ?? null)) {
                    echo "#";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getFullUrl", array(), "method"), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                echo "</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
    ";
        } else {
            // line 37
            echo "        ";
            if (($context["isPreview"] ?? null)) {
                echo "<div class=\"moto-widget-empty\"></div>";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/recent_posts.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  135 => 38,  130 => 37,  126 => 35,  107 => 28,  103 => 27,  98 => 24,  79 => 19,  71 => 18,  65 => 17,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  50 => 12,  40 => 7,  35 => 4,  32 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/recent_posts.twig.html", "/var/www/html/template/mt-includes/widgets/blog/templates/recent_posts.twig.html");
    }
}
