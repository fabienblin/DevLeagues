<?php

/* @AvanzuAdminTheme/layout/form-theme.html.twig */
class __TwigTemplate_f87dd116f337bc6ee719d730c22aee05a8536504a6b5cc1c8baa9472d08ffff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@AvanzuAdminTheme/layout/form-theme.html.twig", 1);
        $this->blocks = array(
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_373ab927b5d600beae4b2a930ed9914f45dd63446b683148a09ed10e1d07c810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373ab927b5d600beae4b2a930ed9914f45dd63446b683148a09ed10e1d07c810->enter($__internal_373ab927b5d600beae4b2a930ed9914f45dd63446b683148a09ed10e1d07c810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/form-theme.html.twig"));

        $__internal_7cef1dfdc5fdc925d40e59d20b01546c8bcaf7e538dbe1e675440b62b210b948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cef1dfdc5fdc925d40e59d20b01546c8bcaf7e538dbe1e675440b62b210b948->enter($__internal_7cef1dfdc5fdc925d40e59d20b01546c8bcaf7e538dbe1e675440b62b210b948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_373ab927b5d600beae4b2a930ed9914f45dd63446b683148a09ed10e1d07c810->leave($__internal_373ab927b5d600beae4b2a930ed9914f45dd63446b683148a09ed10e1d07c810_prof);

        
        $__internal_7cef1dfdc5fdc925d40e59d20b01546c8bcaf7e538dbe1e675440b62b210b948->leave($__internal_7cef1dfdc5fdc925d40e59d20b01546c8bcaf7e538dbe1e675440b62b210b948_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_77ea84e1e0d88ebeb5da0511bc6235b6c434b08b815c6a8028b8e0d21236639a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ea84e1e0d88ebeb5da0511bc6235b6c434b08b815c6a8028b8e0d21236639a->enter($__internal_77ea84e1e0d88ebeb5da0511bc6235b6c434b08b815c6a8028b8e0d21236639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_4898c1f698482607a5634621d9e43de5a88a7184ee9434ff9a2ef3db5a71b878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4898c1f698482607a5634621d9e43de5a88a7184ee9434ff9a2ef3db5a71b878->enter($__internal_4898c1f698482607a5634621d9e43de5a88a7184ee9434ff9a2ef3db5a71b878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 4
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 5
        echo "
    ";
        // line 6
        if (twig_in_filter("checkbox", ($context["types"] ?? $this->getContext($context, "types")))) {
            // line 7
            echo "        ";
            $context["_class"] = " checkbox";
            // line 8
            echo "    ";
        } elseif (twig_in_filter("radio", ($context["types"] ?? $this->getContext($context, "types")))) {
            // line 9
            echo "        ";
            $context["_class"] = " radio";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["_class"] = " form-control";
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["class"] = ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) . ($context["_class"] ?? $this->getContext($context, "_class")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["class"] = ($context["_class"] ?? $this->getContext($context, "_class"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class"))));
        // line 20
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
        
        $__internal_4898c1f698482607a5634621d9e43de5a88a7184ee9434ff9a2ef3db5a71b878->leave($__internal_4898c1f698482607a5634621d9e43de5a88a7184ee9434ff9a2ef3db5a71b878_prof);

        
        $__internal_77ea84e1e0d88ebeb5da0511bc6235b6c434b08b815c6a8028b8e0d21236639a->leave($__internal_77ea84e1e0d88ebeb5da0511bc6235b6c434b08b815c6a8028b8e0d21236639a_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_231821fe3820f2b059316121e8265d368f934ce62a1bb264d923690544644165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231821fe3820f2b059316121e8265d368f934ce62a1bb264d923690544644165->enter($__internal_231821fe3820f2b059316121e8265d368f934ce62a1bb264d923690544644165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_42d73db6d35a6f308e0af4d6121ba0b06ca55a3d4956a41a50b42074632270ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d73db6d35a6f308e0af4d6121ba0b06ca55a3d4956a41a50b42074632270ed->enter($__internal_42d73db6d35a6f308e0af4d6121ba0b06ca55a3d4956a41a50b42074632270ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_42d73db6d35a6f308e0af4d6121ba0b06ca55a3d4956a41a50b42074632270ed->leave($__internal_42d73db6d35a6f308e0af4d6121ba0b06ca55a3d4956a41a50b42074632270ed_prof);

        
        $__internal_231821fe3820f2b059316121e8265d368f934ce62a1bb264d923690544644165->leave($__internal_231821fe3820f2b059316121e8265d368f934ce62a1bb264d923690544644165_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_96974fff1b6b7c47a80c30c5608a871b8ab8a86b91cfe91806d550d6048e46ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96974fff1b6b7c47a80c30c5608a871b8ab8a86b91cfe91806d550d6048e46ad->enter($__internal_96974fff1b6b7c47a80c30c5608a871b8ab8a86b91cfe91806d550d6048e46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_79becb32dd5c07c1649d1d22797d33b7a93c830eddad5adf6c31b134d8efc30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79becb32dd5c07c1649d1d22797d33b7a93c830eddad5adf6c31b134d8efc30c->enter($__internal_79becb32dd5c07c1649d1d22797d33b7a93c830eddad5adf6c31b134d8efc30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "form-control"));
        // line 35
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_79becb32dd5c07c1649d1d22797d33b7a93c830eddad5adf6c31b134d8efc30c->leave($__internal_79becb32dd5c07c1649d1d22797d33b7a93c830eddad5adf6c31b134d8efc30c_prof);

        
        $__internal_96974fff1b6b7c47a80c30c5608a871b8ab8a86b91cfe91806d550d6048e46ad->leave($__internal_96974fff1b6b7c47a80c30c5608a871b8ab8a86b91cfe91806d550d6048e46ad_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3306791152811169508d35c1547e12004650bd068f8aeac05b95bf56a15dbc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3306791152811169508d35c1547e12004650bd068f8aeac05b95bf56a15dbc92->enter($__internal_3306791152811169508d35c1547e12004650bd068f8aeac05b95bf56a15dbc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_814625cb526befca7c79b6b3506c1ea4fdae2823105050d5fd147449d8f39258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814625cb526befca7c79b6b3506c1ea4fdae2823105050d5fd147449d8f39258->enter($__internal_814625cb526befca7c79b6b3506c1ea4fdae2823105050d5fd147449d8f39258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 39
        echo "    <div class=\"checkbox\">
        ";
        // line 40
        ob_start();
        // line 41
        echo "            ";
        if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 42
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            // line 43
            echo "            ";
        }
        // line 44
        echo "            ";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 45
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 46
            echo "            ";
        }
        // line 47
        echo "            ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 48
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 49
            echo "            ";
        }
        // line 50
        echo "
            <label";
        // line 51
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
            <input type=\"checkbox\" ";
        // line 52
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 53
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            ";
        }
        // line 56
        echo "            </label>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 58
        echo "    </div>
";
        
        $__internal_814625cb526befca7c79b6b3506c1ea4fdae2823105050d5fd147449d8f39258->leave($__internal_814625cb526befca7c79b6b3506c1ea4fdae2823105050d5fd147449d8f39258_prof);

        
        $__internal_3306791152811169508d35c1547e12004650bd068f8aeac05b95bf56a15dbc92->leave($__internal_3306791152811169508d35c1547e12004650bd068f8aeac05b95bf56a15dbc92_prof);

    }

    // line 61
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_66a4c80f17bb109c04effb81cc8ab4d56a1b8c208b88f40724c6fab9429c0355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a4c80f17bb109c04effb81cc8ab4d56a1b8c208b88f40724c6fab9429c0355->enter($__internal_66a4c80f17bb109c04effb81cc8ab4d56a1b8c208b88f40724c6fab9429c0355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_dbd818003887dc5b7e7613d87c53e58c367b89c78a3e4ef40f5e392703a8d9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd818003887dc5b7e7613d87c53e58c367b89c78a3e4ef40f5e392703a8d9f5->enter($__internal_dbd818003887dc5b7e7613d87c53e58c367b89c78a3e4ef40f5e392703a8d9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 62
        echo "    <div class=\"radio\">
        ";
        // line 63
        ob_start();
        // line 64
        echo "            ";
        if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 65
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            // line 66
            echo "            ";
        }
        // line 67
        echo "            ";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 68
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 71
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 72
            echo "            ";
        }
        // line 73
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
            <input type=\"radio\" ";
        // line 74
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 75
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 76
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            ";
        }
        // line 78
        echo "            </label>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 80
        echo "    </div>
";
        
        $__internal_dbd818003887dc5b7e7613d87c53e58c367b89c78a3e4ef40f5e392703a8d9f5->leave($__internal_dbd818003887dc5b7e7613d87c53e58c367b89c78a3e4ef40f5e392703a8d9f5_prof);

        
        $__internal_66a4c80f17bb109c04effb81cc8ab4d56a1b8c208b88f40724c6fab9429c0355->leave($__internal_66a4c80f17bb109c04effb81cc8ab4d56a1b8c208b88f40724c6fab9429c0355_prof);

    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_75f522e117675014642de8a452948546065212d727e3bfd3110a4aaac6263d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f522e117675014642de8a452948546065212d727e3bfd3110a4aaac6263d59->enter($__internal_75f522e117675014642de8a452948546065212d727e3bfd3110a4aaac6263d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_13f998806809ce84da24c58f017cd1a32890d9a7270a39fec2316b7cf9ad2ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f998806809ce84da24c58f017cd1a32890d9a7270a39fec2316b7cf9ad2ce9->enter($__internal_13f998806809ce84da24c58f017cd1a32890d9a7270a39fec2316b7cf9ad2ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 84
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            echo "        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            ";
            // line 90
            if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
                // line 91
                echo "                ";
                $context["class"] = ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) . " timepicker");
                // line 92
                echo "            ";
            } else {
                // line 93
                echo "                ";
                $context["class"] = " timepicker";
                // line 94
                echo "            ";
            }
            // line 95
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class")), "data-datepicker" => "on"));
            // line 96
            echo "
            ";
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 100
            echo "        ";
            $context["date_pattern"] = (("<div class=\"row\">" . ($context["date_pattern"] ?? $this->getContext($context, "date_pattern"))) . "</div>");
            // line 101
            echo "        ";
            echo twig_replace_filter(twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => "<div class=\"col-xs-4\">{{ year }}</div>", "{{ month }}" => "<div class=\"col-xs-4\">{{ month }}</div>", "{{ day }}" => "<div class=\"col-xs-4\">{{ day }}</div>")), array("{{ year }}" =>             // line 106
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 107
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 108
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 109
            echo "

    ";
        }
        
        $__internal_13f998806809ce84da24c58f017cd1a32890d9a7270a39fec2316b7cf9ad2ce9->leave($__internal_13f998806809ce84da24c58f017cd1a32890d9a7270a39fec2316b7cf9ad2ce9_prof);

        
        $__internal_75f522e117675014642de8a452948546065212d727e3bfd3110a4aaac6263d59->leave($__internal_75f522e117675014642de8a452948546065212d727e3bfd3110a4aaac6263d59_prof);

    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e888360f32f9aaadce46a5152c93489a48877202533b07896bd40f5421514b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e888360f32f9aaadce46a5152c93489a48877202533b07896bd40f5421514b9a->enter($__internal_e888360f32f9aaadce46a5152c93489a48877202533b07896bd40f5421514b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a1aab649621b333da08a27d1aa967d694c48c5e9637972426aa5695e655ad821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1aab649621b333da08a27d1aa967d694c48c5e9637972426aa5695e655ad821->enter($__internal_a1aab649621b333da08a27d1aa967d694c48c5e9637972426aa5695e655ad821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 115
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 116
            echo "        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                ";
            // line 118
            if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
                // line 119
                echo "                    ";
                $context["class"] = ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) . " timepicker");
                // line 120
                echo "                ";
            } else {
                // line 121
                echo "                    ";
                $context["class"] = " timepicker";
                // line 122
                echo "                ";
            }
            // line 123
            echo "                ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class")), "data-timepicker" => "on"));
            // line 124
            echo "                ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
                <div class=\"input-group-addon add-on\">
                    <i class=\"fa fa-clock-o\"></i>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 131
            echo "        ";
            $this->displayParentBlock("time_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_a1aab649621b333da08a27d1aa967d694c48c5e9637972426aa5695e655ad821->leave($__internal_a1aab649621b333da08a27d1aa967d694c48c5e9637972426aa5695e655ad821_prof);

        
        $__internal_e888360f32f9aaadce46a5152c93489a48877202533b07896bd40f5421514b9a->leave($__internal_e888360f32f9aaadce46a5152c93489a48877202533b07896bd40f5421514b9a_prof);

    }

    // line 135
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4bd8a138acd5aab18f77f717f32d7dd28cd6d6eef1f09784ec1fb3042e80d30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd8a138acd5aab18f77f717f32d7dd28cd6d6eef1f09784ec1fb3042e80d30e->enter($__internal_4bd8a138acd5aab18f77f717f32d7dd28cd6d6eef1f09784ec1fb3042e80d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fa0d070afbfcb6fe1bd6d099cb4e36597e784b008e29a5e6870d9dfc9c4b1a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0d070afbfcb6fe1bd6d099cb4e36597e784b008e29a5e6870d9dfc9c4b1a2f->enter($__internal_fa0d070afbfcb6fe1bd6d099cb4e36597e784b008e29a5e6870d9dfc9c4b1a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 136
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 137
        echo "    ";
        if ((twig_in_filter("checkbox", ($context["types"] ?? $this->getContext($context, "types"))) || twig_in_filter("radio", ($context["types"] ?? $this->getContext($context, "types"))))) {
            // line 138
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 143
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
            ";
            // line 145
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 146
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        
        $__internal_fa0d070afbfcb6fe1bd6d099cb4e36597e784b008e29a5e6870d9dfc9c4b1a2f->leave($__internal_fa0d070afbfcb6fe1bd6d099cb4e36597e784b008e29a5e6870d9dfc9c4b1a2f_prof);

        
        $__internal_4bd8a138acd5aab18f77f717f32d7dd28cd6d6eef1f09784ec1fb3042e80d30e->leave($__internal_4bd8a138acd5aab18f77f717f32d7dd28cd6d6eef1f09784ec1fb3042e80d30e_prof);

    }

    // line 151
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3dcdf89d181d9292842d19bb7aadf1a8477ca5c649ec2d3f7dfbd76902170f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcdf89d181d9292842d19bb7aadf1a8477ca5c649ec2d3f7dfbd76902170f6e->enter($__internal_3dcdf89d181d9292842d19bb7aadf1a8477ca5c649ec2d3f7dfbd76902170f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d53085ee1292ed456bb634dba9f427bee5692f23d2bff3f28c7decc085fe194e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53085ee1292ed456bb634dba9f427bee5692f23d2bff3f28c7decc085fe194e->enter($__internal_d53085ee1292ed456bb634dba9f427bee5692f23d2bff3f28c7decc085fe194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 152
        echo "
    ";
        // line 153
        if (array_key_exists("help", $context)) {
            // line 154
            echo "        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\"><i class=\"fa fa-question-circle\"></i></a>
    ";
        }
        // line 156
        echo "
    ";
        // line 157
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
    ";
        // line 158
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 159
            echo "        <span class=\"required\" title=\"Dies ist ein Pflichtfeld\">*</span>
    ";
        }
        // line 161
        echo "
";
        
        $__internal_d53085ee1292ed456bb634dba9f427bee5692f23d2bff3f28c7decc085fe194e->leave($__internal_d53085ee1292ed456bb634dba9f427bee5692f23d2bff3f28c7decc085fe194e_prof);

        
        $__internal_3dcdf89d181d9292842d19bb7aadf1a8477ca5c649ec2d3f7dfbd76902170f6e->leave($__internal_3dcdf89d181d9292842d19bb7aadf1a8477ca5c649ec2d3f7dfbd76902170f6e_prof);

    }

    // line 164
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_aac2457da50649eec26d5950e6cebcb7be072b9c480892cdce510b4c4ef07175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac2457da50649eec26d5950e6cebcb7be072b9c480892cdce510b4c4ef07175->enter($__internal_aac2457da50649eec26d5950e6cebcb7be072b9c480892cdce510b4c4ef07175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_82225a535659c3cc82134be3c0cd788c2e61373e459fc75ddf125f7299695c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82225a535659c3cc82134be3c0cd788c2e61373e459fc75ddf125f7299695c34->enter($__internal_82225a535659c3cc82134be3c0cd788c2e61373e459fc75ddf125f7299695c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 165
        echo "    ";
        ob_start();
        // line 166
        echo "        ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 167
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 169
                echo "                    <li class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "            </ul>
        ";
        }
        // line 173
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_82225a535659c3cc82134be3c0cd788c2e61373e459fc75ddf125f7299695c34->leave($__internal_82225a535659c3cc82134be3c0cd788c2e61373e459fc75ddf125f7299695c34_prof);

        
        $__internal_aac2457da50649eec26d5950e6cebcb7be072b9c480892cdce510b4c4ef07175->leave($__internal_aac2457da50649eec26d5950e6cebcb7be072b9c480892cdce510b4c4ef07175_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/layout/form-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 173,  627 => 171,  618 => 169,  614 => 168,  611 => 167,  608 => 166,  605 => 165,  596 => 164,  585 => 161,  581 => 159,  579 => 158,  575 => 157,  572 => 156,  566 => 154,  564 => 153,  561 => 152,  552 => 151,  538 => 146,  534 => 145,  530 => 144,  525 => 143,  519 => 140,  515 => 139,  510 => 138,  507 => 137,  504 => 136,  495 => 135,  481 => 131,  470 => 124,  467 => 123,  464 => 122,  461 => 121,  458 => 120,  455 => 119,  453 => 118,  449 => 116,  446 => 115,  437 => 114,  424 => 109,  422 => 108,  421 => 107,  420 => 106,  418 => 101,  415 => 100,  409 => 97,  406 => 96,  403 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  389 => 90,  382 => 85,  379 => 84,  370 => 83,  359 => 80,  355 => 78,  349 => 76,  347 => 75,  335 => 74,  319 => 73,  316 => 72,  313 => 71,  310 => 70,  307 => 69,  304 => 68,  301 => 67,  298 => 66,  295 => 65,  292 => 64,  290 => 63,  287 => 62,  278 => 61,  267 => 58,  263 => 56,  257 => 54,  255 => 53,  243 => 52,  228 => 51,  225 => 50,  222 => 49,  219 => 48,  216 => 47,  213 => 46,  210 => 45,  207 => 44,  204 => 43,  201 => 42,  198 => 41,  196 => 40,  193 => 39,  184 => 38,  171 => 35,  168 => 34,  159 => 33,  147 => 29,  138 => 27,  134 => 26,  129 => 25,  126 => 24,  117 => 23,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  89 => 15,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  72 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block widget_attributes %}
    {% set types = form.vars.block_prefixes %}

    {% if 'checkbox' in types %}
        {% set _class = ' checkbox' %}
    {% elseif 'radio' in types%}
        {% set _class = ' radio' %}
    {% else %}
        {% set _class = ' form-control' %}
    {% endif %}

    {% if attr.class is defined %}
        {% set class = attr.class ~ _class %}
    {% else %}
        {% set class = _class %}
    {% endif %}
    {% set attr = attr|merge({'class' : class}) %}
    {{ parent () }}
{% endblock widget_attributes %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child) }}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class' : 'form-control'}) %}
    {{ parent() }}
{% endblock %}

{% block checkbox_widget %}
    <div class=\"checkbox\">
        {% spaceless %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}

            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
            {% if label is not same as(false) %}
                {{ label|trans({}, translation_domain) }}
            {% endif %}
            </label>
        {% endspaceless %}
    </div>
{% endblock checkbox_widget %}

{% block radio_widget %}
    <div class=\"radio\">
        {% spaceless %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
            {% if label is not same as(false) %}
                {{ label|trans({}, translation_domain) }}
            {% endif %}
            </label>
        {% endspaceless %}
    </div>
{% endblock radio_widget %}

{% block date_widget %}
    {% if widget == 'single_text' %}
        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            {% if attr.class is defined %}
                {% set class = attr.class ~ ' timepicker' %}
            {% else %}
                {% set class = ' timepicker' %}
            {% endif %}
            {% set attr = attr|merge({'class' : class, 'data-datepicker':'on'}) %}

            {{ block('form_widget_simple') }}
        </div>
    {% else %}
        {% set date_pattern = '<div class=\"row\">' ~ date_pattern ~ '</div>'|raw %}
        {{ date_pattern|replace({
        '{{ year }}' : '<div class=\"col-xs-4\">{{ year }}</div>',
        '{{ month }}' : '<div class=\"col-xs-4\">{{ month }}</div>',
        '{{ day }}' : '<div class=\"col-xs-4\">{{ day }}</div>',
        })|raw|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
        })|raw }}

    {% endif %}
{% endblock %}

{% block time_widget %}
    {% if widget == 'single_text' %}
        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                {% if attr.class is defined %}
                    {% set class = attr.class ~ ' timepicker' %}
                {% else %}
                    {% set class = ' timepicker' %}
                {% endif %}
                {% set attr = attr|merge({'class' : class, 'data-timepicker':'on'}) %}
                {{ block('form_widget_simple') }}
                <div class=\"input-group-addon add-on\">
                    <i class=\"fa fa-clock-o\"></i>
                </div>
            </div>
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block form_row %}
    {% set types = form.vars.block_prefixes %}
    {% if 'checkbox' in types or 'radio' in types %}
        <div class=\"form-group {{ errors|length > 0 ? 'has-error has-feedback'  : '' }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    {% else %}
        <div class=\"form-group {{ errors|length > 0 ? 'has-error has-feedback'  : '' }}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    {% endif %}
{% endblock %}

{% block form_label %}

    {% if help is defined %}
        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"{{ help }}\"><i class=\"fa fa-question-circle\"></i></a>
    {% endif %}

    {{ parent() }}
    {% if required %}
        <span class=\"required\" title=\"Dies ist ein Pflichtfeld\">*</span>
    {% endif %}

{% endblock form_label %}

{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li class=\"text-danger\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{# % block form_widget_simple %}
    {{ parent() }}

    {% if help is defined %}
        <p class=\"help-block\">{{ help }}</p>
    {% endif %}
{% endblock % #}
", "@AvanzuAdminTheme/layout/form-theme.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/form-theme.html.twig");
    }
}
