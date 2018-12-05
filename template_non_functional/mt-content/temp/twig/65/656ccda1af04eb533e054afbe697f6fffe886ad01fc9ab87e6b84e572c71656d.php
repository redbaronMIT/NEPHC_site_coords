<?php

/* @websiteWidgets/blog/templates/post_list.twig.html */
class __TwigTemplate_2c9c437739d620078e5d847e810ca31db5c2f942c733038fe9e367b38125c3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_d8737b257e247eb973a5f18908c9fc6d317f07606dba73470d0b35622d5e93e4' => array($this, 'block___internal_d8737b257e247eb973a5f18908c9fc6d317f07606dba73470d0b35622d5e93e4'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-blog-post_list moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"blog.post_list\">
    ";
        // line 2
        if (($this->getAttribute(($context["currentWidget"] ?? null), "isAllowShowContent", array(), "method") && ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getPaginator", array(), "method"), "getTotalItemCount", array(), "method") > 0))) {
            // line 3
            echo "        <ul class=\"moto-blog-posts-list\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentWidget"] ?? null), "getPaginator", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 5
                echo "                <li class=\"moto-blog-posts-list-item\">
                    <article>
                        <div class=\"moto-widget moto-widget-row\" data-widget=\"row\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"moto-cell col-sm-12\" data-container=\"container\">
                                        <div class=\"moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto\" data-preset=\"default\" data-widget=\"text\">
                                            <div class=\"moto-widget-text-content moto-widget-text-editable\">
                                                <h2 class=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "title.font_style", 1 => "moto-text_system_7"), "method"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getFullUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                echo "</a></h2>
                                            </div>
                                        </div>
                                        <div class=\"moto-widget moto-widget-row\" data-widget=\"row\">
                                            <div class=\"container-fluid\">
                                                <div class=\"row\">
                                                    <div class=\"moto-cell col-sm-12\" data-container=\"container\">
                                                        ";
                // line 20
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, "blog.post_published_on", array("font_style" => $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "meta.font_style", 1 => "moto-text_system_11"), "method"), "spacing" => array("top" => "auto", "right" => "auto", "bottom" => "small", "left" => "auto")), array("currentPage" => $context["post"]));
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                // line 25
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "src", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "type", array()) == "image"))) {
                    // line 26
                    echo "                                            ";
                    echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, "image", array("src" => $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "src", array()), "alt" => $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "alt", array()), "title" => $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "properties", array()), "feature_media", array()), "title", array()), "preset" => $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "feature_image.preset", 1 => "default"), "method"), "link" => array("action" => "blog.post", "properties" => array("id" => $this->getAttribute($context["post"], "id", array()), "anchor" => "")), "animation" => "", "align" => array("desktop" => "", "tablet" => "", "mobile-v" => "", "mobile-h" => ""), "spacing" => array("top" => "auto", "right" => "auto", "bottom" => "small", "left" => "auto")));
                    echo "
                                        ";
                }
                // line 28
                echo "                                        <div class=\"moto-blog-post-content moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto\">
                                            ";
                // line 29
                echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), array($this->env,                 $this->renderBlock("__internal_d8737b257e247eb973a5f18908c9fc6d317f07606dba73470d0b35622d5e93e4", $context, $blocks), $context["post"], ($this->getAttribute($context["post"], "type", array()) . ":short_description")));
                // line 32
                echo "                                        </div>
                                        ";
                // line 33
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, "button", array("link" => array("action" => "blog.post", "properties" => array("id" => $this->getAttribute($context["post"], "id", array()), "anchor" => "")), "label" => (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "read_more_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "read_more_label", array()), "Read More")) : ("Read More")), "preset" => $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "button.preset", 1 => "5"), "method"), "size" => $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "button.size", 1 => "medium"), "method"), "align" => array("desktop" => "left", "tablet" => "", "mobile-v" => "", "mobile-h" => ""), "animation" => "", "spacing" => array("top" => "auto", "right" => "auto", "bottom" => "small", "left" => "auto")));
                echo "
                                        <div class=\"moto-widget moto-widget-divider moto-preset-";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "divider.preset", 1 => "default"), "method"), "html", null, true);
                echo " moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto moto-align-center\" data-widget=\"divider_horizontal\" data-divider-type=\"horizontal\" data-preset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getDesignOption", array(0 => "divider.preset", 1 => "default"), "method"), "html", null, true);
                echo "\">
                                            <hr class=\"moto-widget-divider-line\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </ul>
        ";
            // line 45
            $context["PaginatorPages"] = $this->getAttribute(($context["currentWidget"] ?? null), "getPaginatorPages", array(), "method");
            // line 46
            echo "        ";
            if (($this->getAttribute(($context["PaginatorPages"] ?? null), "pageCount", array()) > 1)) {
                // line 47
                echo "            <div class=\"moto-widget moto-widget-pagination moto-preset-default clearfix moto-spacing-top-small moto-spacing-bottom-small\" data-widget=\"pagination\" data-preset=\"default\" >
                ";
                // line 48
                if (($this->getAttribute(($context["PaginatorPages"] ?? null), "first", array()) != $this->getAttribute(($context["PaginatorPages"] ?? null), "current", array()))) {
                    // line 49
                    echo "                    <ul class=\"moto-pagination-group moto-pagination-group-controls moto-pagination-group_left\">
                        <li class=\"moto-pagination-item moto-pagination-item-control moto-pagination-item-control_first\">
                            <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(), "method"), "html", null, true);
                    echo "\" class=\"moto-pagination-link\"><i class=\"moto-pagination-link-icon moto-pagination-link-text fa fa-angle-double-left\"></i></a>
                        </li>
                        <li class=\"moto-pagination-item moto-pagination-item-control moto-pagination-item-control_previous\">
                            ";
                    // line 54
                    if (($this->getAttribute(($context["PaginatorPages"] ?? null), "first", array()) != $this->getAttribute(($context["PaginatorPages"] ?? null), "previous", array()))) {
                        // line 55
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(0 => array("page" => $this->getAttribute(($context["PaginatorPages"] ?? null), "previous", array()))), "method"), "html", null, true);
                        echo "\" class=\"moto-pagination-link\"><i class=\"moto-pagination-link-icon moto-pagination-link-text fa fa-angle-left\"></i></a>
                            ";
                    } else {
                        // line 57
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(), "method"), "html", null, true);
                        echo "\" class=\"moto-pagination-link\"><i class=\"moto-pagination-link-icon moto-pagination-link-text fa fa-angle-left\"></i></a>
                            ";
                    }
                    // line 59
                    echo "                        </li>
                    </ul>
                ";
                }
                // line 62
                echo "                <ul class=\"moto-pagination-group moto-pagination-group_pages\">
                    ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["PaginatorPages"] ?? null), "pagesInRange", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "                        <li class=\"moto-pagination-item moto-pagination-item-page\">
                            ";
                    // line 65
                    if (($context["i"] == $this->getAttribute(($context["PaginatorPages"] ?? null), "current", array()))) {
                        // line 66
                        echo "                                <span class=\"moto-pagination-link moto-pagination-link_active\"><span class=\"moto-pagination-link-text\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</span></span>
                            ";
                    } else {
                        // line 68
                        echo "                                ";
                        if (($context["i"] == 1)) {
                            // line 69
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(), "method"), "html", null, true);
                            echo "\" class=\"moto-pagination-link\"><span class=\"moto-pagination-link-text\">";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "</span></a>
                                ";
                        } else {
                            // line 71
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(0 => array("page" => $context["i"])), "method"), "html", null, true);
                            echo "\" class=\"moto-pagination-link\"><span class=\"moto-pagination-link-text\">";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "</span></a>
                                ";
                        }
                        // line 73
                        echo "                            ";
                    }
                    // line 74
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                </ul>
                ";
                // line 77
                if (($this->getAttribute(($context["PaginatorPages"] ?? null), "last", array()) != $this->getAttribute(($context["PaginatorPages"] ?? null), "current", array()))) {
                    // line 78
                    echo "                    <ul class=\"moto-pagination-group moto-pagination-group-controls moto-pagination-group_right\">
                        <li class=\"moto-pagination-item moto-pagination-item-control moto-pagination-item-control_next\">
                            <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(0 => array("page" => $this->getAttribute(($context["PaginatorPages"] ?? null), "next", array()))), "method"), "html", null, true);
                    echo "\" class=\"moto-pagination-link\"><i class=\"moto-pagination-link-icon moto-pagination-link-text fa fa-angle-right\"></i></a>
                        </li>
                        <li class=\"moto-pagination-item moto-pagination-item-control moto-pagination-item-control_last\">
                            <a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getFullUrl", array(0 => array("page" => $this->getAttribute(($context["PaginatorPages"] ?? null), "last", array()))), "method"), "html", null, true);
                    echo "\" class=\"moto-pagination-link\"><i class=\"moto-pagination-link-icon moto-pagination-link-text fa fa-angle-double-right\"></i></a>
                        </li>
                    </ul>
                ";
                }
                // line 87
                echo "            </div>
        ";
            }
            // line 89
            echo "    ";
        } elseif (($context["isPreview"] ?? null)) {
            // line 90
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 92
        echo "</div>";
    }

    // line 29
    public function block___internal_d8737b257e247eb973a5f18908c9fc6d317f07606dba73470d0b35622d5e93e4($context, array $blocks = array())
    {
        // line 30
        echo "                                                ";
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["post"] ?? null), "short_description", array())), "@websiteWidgets/blog/templates/post_list.twig.html", 30)->display($context);
        // line 31
        echo "                                            ";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_list.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 31,  256 => 30,  253 => 29,  249 => 92,  245 => 90,  242 => 89,  238 => 87,  231 => 83,  225 => 80,  221 => 78,  219 => 77,  216 => 76,  209 => 74,  206 => 73,  198 => 71,  190 => 69,  187 => 68,  181 => 66,  179 => 65,  176 => 64,  172 => 63,  169 => 62,  164 => 59,  158 => 57,  152 => 55,  150 => 54,  144 => 51,  140 => 49,  138 => 48,  135 => 47,  132 => 46,  130 => 45,  127 => 44,  101 => 34,  97 => 33,  94 => 32,  92 => 29,  89 => 28,  83 => 26,  81 => 25,  73 => 20,  59 => 13,  49 => 5,  32 => 4,  29 => 3,  27 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_list.twig.html", "/var/www/html/template/mt-includes/widgets/blog/templates/post_list.twig.html");
    }
}
