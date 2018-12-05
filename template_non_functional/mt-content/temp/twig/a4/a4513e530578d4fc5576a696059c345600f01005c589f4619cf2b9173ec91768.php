<?php

/* @lessTemplates/styler/item.less.twig */
class __TwigTemplate_77a73b4c1dd5f8b1b603a2fdd83d01e0c7cc89bee82cbc50679c21f358703e6e extends Twig_Template
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
        echo " ";
        $context["css_name"] = ("." . $this->getAttribute(($context["item"] ?? null), "class_name", array()));
        echo " ";
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "properties", array())));
        echo " ";
        $context["link"] = "";
        echo " ";
        if ($this->getAttribute(($context["item"] ?? null), "link", array())) {
            echo " ";
            $context["link"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "link", array())));
            echo " ";
        }
        echo " ";
        if (($this->getAttribute(($context["item"] ?? null), "is_responsive", array()) && ($this->getAttribute(($context["item"] ?? null), "is_responsive", array()) == 1))) {
            echo " ";
            $context["devices"] = array(0 => "desktop", 1 => "tablet", 2 => "mobile-h", 3 => "mobile-v");
            echo " ";
        } else {
            echo " ";
            $context["devices"] = array(0 => "desktop");
            echo " ";
        }
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            echo " ";
            if ($this->getAttribute(($context["properties"] ?? null), $context["part"], array(), "array")) {
                echo " ";
                if (($context["part"] != "desktop")) {
                    echo " @media (max-width: @const_media_";
                    echo $context["part"];
                    echo "_max_width) { ";
                }
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "base", 1 => "hover", 2 => "active"));
                foreach ($context['_seq'] as $context["_key"] => $context["modificator"]) {
                    echo "  ";
                    if ($this->getAttribute($this->getAttribute(($context["properties"] ?? null), $context["part"], array(), "array"), $context["modificator"], array(), "array")) {
                        echo "  ";
                        $context["_modificator"] = "";
                        echo " ";
                        if (($context["modificator"] != "base")) {
                            echo " ";
                            $context["_modificator"] = (":" . $context["modificator"]);
                            echo " ";
                        }
                        echo "  ";
                        echo ($context["css_name"] ?? null);
                        echo ($context["_modificator"] ?? null);
                        echo " { ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["properties"] ?? null), $context["part"], array(), "array"), $context["modificator"], array(), "array"));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            echo " ";
                            if (($context["value"] == "")) {
                                echo " ";
                            } elseif (($context["key"] == "background-image")) {
                                echo " ";
                                if (($context["value"] == "none")) {
                                    echo " background-image: none; ";
                                } else {
                                    echo " background-image: url('";
                                    echo $this->getAttribute(($context["Linker"] ?? null), "img", array(0 => $context["value"]), "method");
                                    echo "');";
                                }
                                echo " ";
                            } else {
                                echo " ";
                                echo $context["key"];
                                echo ": ";
                                echo $context["value"];
                                echo "; ";
                            }
                            echo " ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " } ";
                    }
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modificator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  ";
                if (($context["part"] != "desktop")) {
                    echo " }  ";
                }
                echo " ";
            }
            echo " ";
            if (((($context["part"] == "desktop") && ($context["link"] ?? null)) && $this->getAttribute(($context["link"] ?? null), $context["part"], array(), "array"))) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "base", 1 => "hover", 2 => "active"));
                foreach ($context['_seq'] as $context["_key"] => $context["modificator"]) {
                    echo " ";
                    if ($this->getAttribute($this->getAttribute(($context["link"] ?? null), $context["part"], array(), "array"), $context["modificator"], array(), "array")) {
                        echo " ";
                        $context["_modificator"] = "";
                        echo " ";
                        if (($context["modificator"] != "base")) {
                            echo " ";
                            $context["_modificator"] = (":" . $context["modificator"]);
                            echo " ";
                        }
                        echo " ";
                        echo ($context["css_name"] ?? null);
                        echo " a";
                        echo ($context["_modificator"] ?? null);
                        echo " { ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["link"] ?? null), $context["part"], array(), "array"), $context["modificator"], array(), "array"));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            echo " ";
                            if (($context["value"] == "")) {
                                echo " ";
                            } elseif (($context["key"] == "background-image")) {
                                echo " background-image: url('";
                                echo $this->getAttribute(($context["Linker"] ?? null), "img", array(0 => $context["value"]), "method");
                                echo "');";
                            } else {
                                echo " ";
                                echo $context["key"];
                                echo ": ";
                                echo $context["value"];
                                echo "; ";
                            }
                            echo " ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " }  ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modificator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
    }

    public function getTemplateName()
    {
        return "@lessTemplates/styler/item.less.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@lessTemplates/styler/item.less.twig", "/var/www/html/template/mt-includes/templates/less/styler/item.less.twig");
    }
}
