<?php

/* @layoutTemplates/blog/post.html.twig */
class __TwigTemplate_800380e81526fe1220273d9a9f22d999d0d5926abe2fce7cd4280d3d55bbbd5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@layoutTemplates/blog/post.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " ";
        // line 4
        echo "
";
        // line 5
        $context["CurrentTemplate"] = $this->getAttribute(($context["currentPage"] ?? null), "getTemplate", array(), "method");
        // line 6
        $context["header"] = $this->getAttribute(($context["currentPage"] ?? null), "getSection", array(0 => "header"), "method");
        // line 7
        $context["footer"] = $this->getAttribute(($context["currentPage"] ?? null), "getSection", array(0 => "footer"), "method");
        // line 8
        echo "
    <div class=\"page\">

";
        // line 11
        if (($context["header"] ?? null)) {
            // line 12
            echo "        <header id=\"section-header\" class=\"header";
            if ( !($context["isPreview"] ?? null)) {
                echo " moto-section";
            }
            echo " moto-section_inactive\">
            ";
            // line 13
            echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["header"] ?? null), 1 => "header"), "method");
            echo "
        </header>
";
        }
        // line 16
        echo "
        ";
        // line 17
        if (($context["CurrentTemplate"] ?? null)) {
            // line 18
            echo "            <!-- With dynamic template -->
            ";
            // line 19
            echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["CurrentTemplate"] ?? null), 1 => $this->getAttribute(($context["CurrentTemplate"] ?? null), "type", array())), "method");
            echo "
        ";
        } else {
            // line 21
            echo "            <!-- Without template -->
            <div class=\"moto-widget moto-widget-row row-fixed\" off-data-widget=\"row\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"moto-cell col-sm-8\" off-data-container=\"container\">

                            <div class=\"moto-widget moto-widget-row\">
                                <div class=\"container-fluid\">
                                    <div class=\"row\">
                                        <div class=\"moto-cell col-sm-12\">

                                            <div class=\"moto-blog-post-meta moto-blog-post-meta_top\">
                                                <span class=\"moto-blog-post-meta-author\">Author <span class=\"\">";
            // line 33
            echo $this->getAttribute($this->getAttribute(($context["currentPage"] ?? null), "getAuthor", array(), "method"), "name", array());
            echo "</span></span>
                                                <span class=\"moto-blog-post-meta-publish\">Posted on <span class=\"\">";
            // line 34
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "created", array()), $this->getAttribute(($context["currentPage"] ?? null), "getDateFormat", array(), "method"));
            echo "</span></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"moto-widget moto-widget-row\">
                                <div class=\"container-fluid\">
                                    <div class=\"row\">
                                        <div class=\"moto-cell col-sm-12\">

                                            <div class=\"moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto\" data-widget=\"text\" data-preset=\"default\" data-spacing=\"aaaa\">
                                                <div class=\"moto-widget-text-content moto-widget-text-editable\">
                                                    <h1 class=\"moto-text_system_7\">";
            // line 49
            echo $this->getAttribute(($context["currentPage"] ?? null), "name", array());
            echo "</h1>
                                                </div>
                                            </div>

                                            <section id=\"section-content\" class=\"content page-";
            // line 53
            echo $this->getAttribute(($context["currentPage"] ?? null), "id", array());
            echo " moto-section\" data-widget=\"section\" data-container=\"section\">
                                                ";
            // line 54
            echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["currentPage"] ?? null), 1 => $this->getAttribute(($context["currentPage"] ?? null), "type", array())), "method");
            echo "
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 62
            if ($this->getAttribute(($context["currentPage"] ?? null), "showComments", array())) {
                // line 63
                echo "                                <div class=\"moto-widget moto-widget-row\">
                                    <div class=\"container-fluid\">
                                        <div class=\"row\">
                                            <div class=\"moto-cell col-sm-12\">
                                        ";
                // line 67
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, "disqus", array("spacing" => array("top" => "auto", "right" => "auto", "bottom" => "auto", "left" => "auto"), "params" => array("url" => "@dynamic")));
                echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 73
            echo "
                        </div>
                        <div class=\"moto-cell col-sm-4\" off-data-container=\"container\">
                            ";
            // line 76
            echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, "blog.recent_posts");
            echo "
                        </div>

                    </div>
                </div>
            </div>

        ";
        }
        // line 84
        echo "
    </div>

";
        // line 87
        if (($context["footer"] ?? null)) {
            // line 88
            echo "    <footer id=\"section-footer\" class=\"footer";
            if ( !($context["isPreview"] ?? null)) {
                echo " moto-section";
            }
            echo " moto-section_inactive\" ";
            if (($this->getAttribute($this->getAttribute(($context["footer"] ?? null), "properties", array()), "sticky", array()) &&  !($context["isPreview"] ?? null))) {
                echo " moto-sticky=\"{mode:'smallHeight', direction:'bottom'}\"";
            }
            echo ">
        ";
            // line 89
            echo $this->getAttribute(($context["ContentHelper"] ?? null), "RenderPageSection", array(0 => ($context["footer"] ?? null), 1 => "footer"), "method");
            echo "
    </footer>
";
        }
        // line 92
        echo "
";
        // line 93
        echo " ";
    }

    public function getTemplateName()
    {
        return "@layoutTemplates/blog/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 93,  189 => 92,  183 => 89,  172 => 88,  170 => 87,  165 => 84,  154 => 76,  149 => 73,  140 => 67,  134 => 63,  132 => 62,  121 => 54,  117 => 53,  110 => 49,  92 => 34,  88 => 33,  74 => 21,  69 => 19,  66 => 18,  64 => 17,  61 => 16,  55 => 13,  48 => 12,  46 => 11,  41 => 8,  39 => 7,  37 => 6,  35 => 5,  32 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layoutTemplates/blog/post.html.twig", "/var/www/html/template/mt-includes/templates/layouts/blog/post.html.twig");
    }
}
