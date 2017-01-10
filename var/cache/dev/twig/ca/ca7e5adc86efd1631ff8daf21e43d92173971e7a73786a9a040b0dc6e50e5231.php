<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_d3b1d9ba0e76d1c0039dc28a05eb9ac6d7943ebf7642cf0500dc683f83d5f37d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03a2830de412bf681882a099be2804eff1b8b2922c89e87e9afa9836490f10e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a2830de412bf681882a099be2804eff1b8b2922c89e87e9afa9836490f10e9->enter($__internal_03a2830de412bf681882a099be2804eff1b8b2922c89e87e9afa9836490f10e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_035cd6f276839663172a21ed481a709365e008762ee2b85e3f4fbf34e8892c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035cd6f276839663172a21ed481a709365e008762ee2b85e3f4fbf34e8892c44->enter($__internal_035cd6f276839663172a21ed481a709365e008762ee2b85e3f4fbf34e8892c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a2830de412bf681882a099be2804eff1b8b2922c89e87e9afa9836490f10e9->leave($__internal_03a2830de412bf681882a099be2804eff1b8b2922c89e87e9afa9836490f10e9_prof);

        
        $__internal_035cd6f276839663172a21ed481a709365e008762ee2b85e3f4fbf34e8892c44->leave($__internal_035cd6f276839663172a21ed481a709365e008762ee2b85e3f4fbf34e8892c44_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_af78300c3e2975bdd8da31d90620cb40bfdea3d6ecfa9e357644f3d69b454b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af78300c3e2975bdd8da31d90620cb40bfdea3d6ecfa9e357644f3d69b454b11->enter($__internal_af78300c3e2975bdd8da31d90620cb40bfdea3d6ecfa9e357644f3d69b454b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b78a2422c6fbb1f3437aca674e9bd923f1af67af952fa0427cb188ab7a54772d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78a2422c6fbb1f3437aca674e9bd923f1af67af952fa0427cb188ab7a54772d->enter($__internal_b78a2422c6fbb1f3437aca674e9bd923f1af67af952fa0427cb188ab7a54772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_b78a2422c6fbb1f3437aca674e9bd923f1af67af952fa0427cb188ab7a54772d->leave($__internal_b78a2422c6fbb1f3437aca674e9bd923f1af67af952fa0427cb188ab7a54772d_prof);

        
        $__internal_af78300c3e2975bdd8da31d90620cb40bfdea3d6ecfa9e357644f3d69b454b11->leave($__internal_af78300c3e2975bdd8da31d90620cb40bfdea3d6ecfa9e357644f3d69b454b11_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f5876d5417c0a13098f49fdb3e921a67ed6789624dbca571048f27021bf39d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5876d5417c0a13098f49fdb3e921a67ed6789624dbca571048f27021bf39d25->enter($__internal_f5876d5417c0a13098f49fdb3e921a67ed6789624dbca571048f27021bf39d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fcb722df2bc5003914c2f52037222587cf9b047fc1a6782dbf0b704f6193c6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb722df2bc5003914c2f52037222587cf9b047fc1a6782dbf0b704f6193c6e1->enter($__internal_fcb722df2bc5003914c2f52037222587cf9b047fc1a6782dbf0b704f6193c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_fcb722df2bc5003914c2f52037222587cf9b047fc1a6782dbf0b704f6193c6e1->leave($__internal_fcb722df2bc5003914c2f52037222587cf9b047fc1a6782dbf0b704f6193c6e1_prof);

        
        $__internal_f5876d5417c0a13098f49fdb3e921a67ed6789624dbca571048f27021bf39d25->leave($__internal_f5876d5417c0a13098f49fdb3e921a67ed6789624dbca571048f27021bf39d25_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f03b7e5692d82a51bedb300b8999b56d38431636f36b5f13556d2f1409d940a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03b7e5692d82a51bedb300b8999b56d38431636f36b5f13556d2f1409d940a6->enter($__internal_f03b7e5692d82a51bedb300b8999b56d38431636f36b5f13556d2f1409d940a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_384861b124954c67cdd648abc6e5998555973e30985a7555f446a548b600347d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384861b124954c67cdd648abc6e5998555973e30985a7555f446a548b600347d->enter($__internal_384861b124954c67cdd648abc6e5998555973e30985a7555f446a548b600347d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_384861b124954c67cdd648abc6e5998555973e30985a7555f446a548b600347d->leave($__internal_384861b124954c67cdd648abc6e5998555973e30985a7555f446a548b600347d_prof);

        
        $__internal_f03b7e5692d82a51bedb300b8999b56d38431636f36b5f13556d2f1409d940a6->leave($__internal_f03b7e5692d82a51bedb300b8999b56d38431636f36b5f13556d2f1409d940a6_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bdd0ea656b200c8336389554fdcf302f6d257c518bb7674459841bbdc5c2a7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd0ea656b200c8336389554fdcf302f6d257c518bb7674459841bbdc5c2a7be->enter($__internal_bdd0ea656b200c8336389554fdcf302f6d257c518bb7674459841bbdc5c2a7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_31d11aef3d5a5ee38d3d69ebc65267fc54a10a6e7dbca0b1f59b58b6170fa610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d11aef3d5a5ee38d3d69ebc65267fc54a10a6e7dbca0b1f59b58b6170fa610->enter($__internal_31d11aef3d5a5ee38d3d69ebc65267fc54a10a6e7dbca0b1f59b58b6170fa610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != ""))) ? (((((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . ($context["widget_type"] ?? $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo ((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute(($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_31d11aef3d5a5ee38d3d69ebc65267fc54a10a6e7dbca0b1f59b58b6170fa610->leave($__internal_31d11aef3d5a5ee38d3d69ebc65267fc54a10a6e7dbca0b1f59b58b6170fa610_prof);

        
        $__internal_bdd0ea656b200c8336389554fdcf302f6d257c518bb7674459841bbdc5c2a7be->leave($__internal_bdd0ea656b200c8336389554fdcf302f6d257c518bb7674459841bbdc5c2a7be_prof);

    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_195d47c42644f3b1d6f63a013d14bc90bf9c9467ad858aea9bfc0cf73073726f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195d47c42644f3b1d6f63a013d14bc90bf9c9467ad858aea9bfc0cf73073726f->enter($__internal_195d47c42644f3b1d6f63a013d14bc90bf9c9467ad858aea9bfc0cf73073726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e53e626d472dd45f66de47e8767fe29c24616fcce8600d8589c46ee22d9af7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53e626d472dd45f66de47e8767fe29c24616fcce8600d8589c46ee22d9af7f8->enter($__internal_e53e626d472dd45f66de47e8767fe29c24616fcce8600d8589c46ee22d9af7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 75
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter(($context["widget_checkbox_label"] ?? $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e53e626d472dd45f66de47e8767fe29c24616fcce8600d8589c46ee22d9af7f8->leave($__internal_e53e626d472dd45f66de47e8767fe29c24616fcce8600d8589c46ee22d9af7f8_prof);

        
        $__internal_195d47c42644f3b1d6f63a013d14bc90bf9c9467ad858aea9bfc0cf73073726f->leave($__internal_195d47c42644f3b1d6f63a013d14bc90bf9c9467ad858aea9bfc0cf73073726f_prof);

    }

    // line 87
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_f403efa84455d5c79eda9f6cef804825f2ba8a65d0943b46f73009f864f27535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f403efa84455d5c79eda9f6cef804825f2ba8a65d0943b46f73009f864f27535->enter($__internal_f403efa84455d5c79eda9f6cef804825f2ba8a65d0943b46f73009f864f27535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_07cde1c97918a1347078c3fe516c90651fda91dd02126554a6ee9c3ec88b66d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cde1c97918a1347078c3fe516c90651fda91dd02126554a6ee9c3ec88b66d4->enter($__internal_07cde1c97918a1347078c3fe516c90651fda91dd02126554a6ee9c3ec88b66d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 88
        echo "    ";
        $this->loadTemplate(($context["template"] ?? $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 88)->display($context);
        
        $__internal_07cde1c97918a1347078c3fe516c90651fda91dd02126554a6ee9c3ec88b66d4->leave($__internal_07cde1c97918a1347078c3fe516c90651fda91dd02126554a6ee9c3ec88b66d4_prof);

        
        $__internal_f403efa84455d5c79eda9f6cef804825f2ba8a65d0943b46f73009f864f27535->leave($__internal_f403efa84455d5c79eda9f6cef804825f2ba8a65d0943b46f73009f864f27535_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 88,  316 => 87,  305 => 84,  300 => 82,  297 => 81,  294 => 80,  291 => 79,  284 => 76,  281 => 75,  279 => 74,  267 => 73,  264 => 72,  256 => 70,  254 => 69,  251 => 68,  247 => 66,  244 => 65,  241 => 64,  238 => 63,  235 => 62,  232 => 61,  223 => 60,  212 => 57,  208 => 55,  206 => 54,  201 => 53,  195 => 52,  191 => 50,  189 => 49,  184 => 47,  180 => 46,  164 => 45,  158 => 43,  155 => 42,  150 => 41,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  120 => 33,  107 => 30,  104 => 29,  95 => 28,  82 => 25,  79 => 24,  70 => 23,  57 => 20,  54 => 19,  45 => 18,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'form_div_layout.html.twig' %}

{#
    Inspired from MopaBootstrapBundle: https://github.com/phiamo/MopaBootstrapBundle
#}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block form_widget_simple %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block choice_widget_expanded %}
    {% spaceless %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type is defined and widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}
        {% if expanded %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {% for child in form %}
            {% if widget_type is defined and widget_type != 'inline' %}
                <div class=\"{{ multiple ? 'checkbox' : 'radio' }}\">
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ form_widget(child, {'attr': {'class': attr.widget_class|default('')}}) }}
            {{ child.vars.label|trans({}, translation_domain) }}
            </label>
            {% if widget_type is defined and widget_type != 'inline' %}
                </div>
            {% endif %}
        {% endfor %}
        {{ block('form_message') }}
        {% if expanded %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            <div class=\"checkbox\">
        {% endif %}

        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render is defined %}
            <label class=\"{% if inline is defined and inline %}checkbox-inline{% endif %}\">
        {% endif %}

        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            {% if label_render is defined and widget_checkbox_label in ['both', 'widget'] %}
                {{ label|trans({}, translation_domain) }}
                </label>
            {% endif %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            </div>
            {{ block('form_message') }}
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}
", "SonataAdminBundle:Form:filter_admin_fields.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
