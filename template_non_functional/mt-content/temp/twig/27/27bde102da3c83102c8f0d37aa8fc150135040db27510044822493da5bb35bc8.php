<?php

/* @websiteWidgets/contact_form/templates/default.twig.html */
class __TwigTemplate_c5799285c68ac4ff60315b25e62b046dd92ee3c5b421e1fdafe4f5f563ed95f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_e09d96412c8d0e56a0b5dd595b193d52a3b695dab61be5ab7554e2e3ff9bdcf6' => array($this, 'block___internal_e09d96412c8d0e56a0b5dd595b193d52a3b695dab61be5ab7554e2e3ff9bdcf6'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["widgetId"] = $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method");
        // line 2
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-contact_form moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", array(), "method"), "html", null, true);
        echo "\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo "\" data-widget=\"contact_form\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "short"), "method"), "html", null, true);
        echo "\">
    ";
        // line 3
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isEmpty", array(), "method")) {
            // line 4
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        } else {
            // line 6
            echo "    <div ng-controller=\"widget.ContactForm.Controller\" ng-init=\"hash = '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getProtectedHash", array(), "method"), "html", null, true);
            echo "';";
            if ( !($context["isPreview"] ?? null)) {
                echo "actionAfterSubmission=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getActionAfterSubmission", array(), "method"), "html", null, true);
                echo ";resetAfterSubmission=";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "resetAfterSubmission", array())), "html", null, true);
            }
            echo "\">
        ";
            // line 7
            if (($context["isPreview"] ?? null)) {
                // line 8
                echo "            <div class=\"moto-widget-cover\"></div>
        ";
            }
            // line 10
            echo "        <form class=\"moto-widget-contact_form-form\" role=\"form\" name=\"contactForm\" ng-submit=\"submit()\" novalidate>
            <div ng-show=\"sending\" class=\"contact-form-loading\"></div>

            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "fields", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["field"]) {
                // line 14
                echo "                ";
                if ($this->getAttribute($context["field"], "enabled", array())) {
                    // line 15
                    echo "                    ";
                    if (($this->getAttribute($context["field"], "tag", array()) == "textarea")) {
                        // line 16
                        echo "                        <div class=\"moto-widget-contact_form-group\">
                            <label for=\"field_";
                        // line 17
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" class=\"moto-widget-contact_form-label\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "placeholder", array()), "html", null, true);
                        echo "</label>
                            <textarea class=\"moto-widget-contact_form-field moto-widget-contact_form-textarea\" rows=\"3\" placeholder=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "placeholder", array()), "html", null, true);
                        echo " ";
                        if ($this->getAttribute($context["field"], "required", array())) {
                            echo "*";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["field"], "required", array())) {
                            echo " ng-blur=\"validate('";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "')\" required ";
                        }
                        echo " ng-model-options=\"{ updateOn: 'blur' }\" name=\"";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" id=\"field_";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" ng-model=\"message.";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\"></textarea>
                            ";
                        // line 19
                        if ( !($context["isPreview"] ?? null)) {
                            // line 20
                            echo "                                <span class=\"moto-widget-contact_form-field-error ng-cloak\" ng-cloak ng-show=\"contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$invalid && !contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$pristine\" >";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "required", array()), "Field is required")) : ("Field is required")), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 22
                        echo "                        </div>
                    ";
                    } elseif (($this->getAttribute(                    // line 23
$context["field"], "type", array()) == "file")) {
                        // line 24
                        echo "                        <div class=\"moto-widget-contact_form-group moto-widget-contact_form-group__attachment\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"moto-cell col-xs-6\">
                                        <div>
                                            <input type=\"text\" class=\"moto-widget-contact_form-field moto-widget-contact_form-input\" readonly=\"readonly\" placeholder=\"\" id=\"field_";
                        // line 29
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" ng-model=\"attachment.name\"/>
                                        </div>
                                    </div>
                                    <div class=\"moto-cell col-xs-6\">
                                        <div class=\"moto-widget moto-widget-button moto-preset-";
                        // line 33
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "buttons", array(), "any", false, true), "attachment", array(), "any", false, true), "preset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "buttons", array(), "any", false, true), "attachment", array(), "any", false, true), "preset", array()), "default")) : ("default")), "html", null, true);
                        echo "\" data-preset=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "attachment", array()), "preset", array()), "html", null, true);
                        echo "\">
                                            <button type=\"button\" ngf-select ng-model=\"attachment\" class=\"moto-widget-button-link moto-size-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "attachment", array()), "size", array()), "html", null, true);
                        echo "\" data-size=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "attachment", array()), "size", array()), "html", null, true);
                        echo "\"><span class=\"fa moto-widget-theme-icon\"></span><span class=\"moto-widget-button-label\">";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["field"], "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["field"], "placeholder", array()), "Upload")) : ("Upload")), "html", null, true);
                        echo "</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    } elseif (($this->getAttribute(                    // line 40
$context["field"], "type", array()) == "checkbox")) {
                        // line 41
                        echo "                        <div class=\"moto-widget-contact_form-group\" ng-class=\"{'moto-widget-contact_form-group-not-valid': contactForm.checkbox.\$invalid, 'moto-widget-contact_form-checkbox-checked': message.checkbox}\">
                            <input id=\"moto-widget-contact_form-checkbox-";
                        // line 42
                        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
                        echo "\" name=\"checkbox\" ng-model=\"message.checkbox\" ng-change=\"checkboxChanged()\" type=\"checkbox\" class=\"moto-widget-contact_form-checkbox\"";
                        if ($this->getAttribute($context["field"], "required", array())) {
                            echo " ng-init=\"requiredCheckbox()\"";
                        }
                        echo ">
                            <label class=\"moto-widget-contact_form-checkbox-label moto-widget-contact_form-checkbox-label_type-";
                        // line 43
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["field"], "labelType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["field"], "labelType", array()), "text")) : ("text")), "html", null, true);
                        echo "\" for=\"moto-widget-contact_form-checkbox-";
                        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
                        echo "\">
                                <span class=\"moto-widget-contact_form-checkbox-icon\"></span>
                                <span class=\"moto-widget-contact_form-checkbox-text ";
                        // line 45
                        if (((($this->getAttribute($context["field"], "labelType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["field"], "labelType", array()), "text")) : ("text")) == "text")) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "text_style", array()), "html", null, true);
                        } else {
                            echo "moto-widget-text";
                        }
                        echo "\">";
                        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), array($this->env,                         $this->renderBlock("__internal_e09d96412c8d0e56a0b5dd595b193d52a3b695dab61be5ab7554e2e3ff9bdcf6", $context, $blocks), ($context["item"] ?? null), "widget:contact_form.checkboxLabel"));
                        echo "</span>
                            </label>
                        </div>
                    ";
                    } else {
                        // line 49
                        echo "                        <div class=\"moto-widget-contact_form-group\">
                            <label for=\"field_";
                        // line 50
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" class=\"moto-widget-contact_form-label\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "placeholder", array()), "html", null, true);
                        echo "</label>
                            <input type=\"text\" class=\"moto-widget-contact_form-field moto-widget-contact_form-input\" placeholder=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "placeholder", array()), "html", null, true);
                        echo " ";
                        if ($this->getAttribute($context["field"], "required", array())) {
                            echo "*";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["field"], "required", array())) {
                            echo " ng-blur=\"validate('";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "')\" required ";
                        }
                        echo " ng-model-options=\"{ updateOn: 'blur' }\" name=\"";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" id=\"field_";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" ng-model=\"message.";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\"/>
                            ";
                        // line 52
                        if ( !($context["isPreview"] ?? null)) {
                            // line 53
                            echo "                                <span class=\"moto-widget-contact_form-field-error ng-cloak\" ng-cloak ng-show=\"contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$invalid && !contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$pristine && !contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".emailInvalid\" >";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "required", array()), "Field is required")) : ("Field is required")), "html", null, true);
                            echo "</span>
                                ";
                            // line 54
                            if (($this->getAttribute($context["field"], "type", array()) == "email")) {
                                // line 55
                                echo "                                    <span class=\"moto-widget-contact_form-field-error ng-cloak\" ng-cloak ng-show=\"contactForm.";
                                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                                echo ".emailInvalid && !contactForm.";
                                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                                echo ".\$pristine\" >";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "invalidEmail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "invalidEmail", array()), "Incorrect email")) : ("Incorrect email")), "html", null, true);
                                echo "</span>
                                ";
                            }
                            // line 57
                            echo "                            ";
                        }
                        // line 58
                        echo "                        </div>
                    ";
                    }
                    // line 60
                    echo "                ";
                }
                // line 61
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
            ";
            // line 64
            if ( !($context["isPreview"] ?? null)) {
                // line 65
                echo "                <div class=\"moto-widget-contact_form-success ng-cloak\" ng-cloak ng-show=\"emailSent\">
                    ";
                // line 66
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "success", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "success", array()), "Your message was sent successfully")) : ("Your message was sent successfully")), "html", null, true);
                echo "
                </div>
                <div class=\"moto-widget-contact_form-danger ng-cloak\" ng-cloak ng-show=\"emailError\">
                    ";
                // line 69
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "messages", array(), "any", false, true), "error", array()), "Sorry, your message was not sent")) : ("Sorry, your message was not sent")), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 72
            echo "            <div class=\"moto-widget-contact_form-buttons\">

            ";
            // line 74
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "preset", array())) {
                // line 75
                echo "                <div class=\"moto-widget moto-widget-button moto-preset-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "preset", array()), "html", null, true);
                echo " moto-align-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "align", array()), "html", null, true);
                echo "\" data-preset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "preset", array()), "html", null, true);
                echo "\" data-align=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "align", array()), "html", null, true);
                echo "\">
                    <a ng-click=\"submit();\" class=\"moto-widget-button-link moto-size-";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "size", array()), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "buttons", array()), "submit", array()), "size", array()), "html", null, true);
                echo "\"><span class=\"fa moto-widget-theme-icon\"></span><span class=\"moto-widget-button-label\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "buttons", array(), "any", false, true), "submit", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "buttons", array(), "any", false, true), "submit", array(), "any", false, true), "label", array()), "Send")) : ("Send")), "html", null, true);
                echo "</span></a>
                </div>
                <button type=\"submit\" class=\"hidden\"></button>
            ";
            } else {
                // line 80
                echo "                <button type=\"submit\" class=\"moto-widget-contact_form-submit\">";
                echo twig_escape_filter($this->env, _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "buttons", array(), "any", false, true), "submit", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "buttons", array(), "any", false, true), "submit", array(), "any", false, true), "label", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "messages", array()), "submitButton", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "messages", array()), "submitButton", array()))), "Send"), "html", null, true);
                echo "</button>
            ";
            }
            // line 82
            echo "
            </div>
        </form>
    </div>
    ";
        }
        // line 87
        echo "</div>";
    }

    // line 45
    public function block___internal_e09d96412c8d0e56a0b5dd595b193d52a3b695dab61be5ab7554e2e3ff9bdcf6($context, array $blocks = array())
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["field"] ?? null), "label", array())), "@websiteWidgets/contact_form/templates/default.twig.html", 45)->display($context);
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/contact_form/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 45,  343 => 87,  336 => 82,  330 => 80,  319 => 76,  308 => 75,  306 => 74,  302 => 72,  296 => 69,  290 => 66,  287 => 65,  285 => 64,  282 => 63,  267 => 61,  264 => 60,  260 => 58,  257 => 57,  247 => 55,  245 => 54,  234 => 53,  232 => 52,  212 => 51,  206 => 50,  203 => 49,  190 => 45,  183 => 43,  175 => 42,  172 => 41,  170 => 40,  157 => 34,  151 => 33,  144 => 29,  137 => 24,  135 => 23,  132 => 22,  122 => 20,  120 => 19,  100 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  68 => 13,  63 => 10,  59 => 8,  57 => 7,  45 => 6,  41 => 4,  39 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/contact_form/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/contact_form/templates/default.twig.html");
    }
}
