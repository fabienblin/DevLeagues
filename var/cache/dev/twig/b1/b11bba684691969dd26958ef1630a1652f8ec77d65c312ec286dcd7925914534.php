<?php

/* @AvanzuAdminTheme/layout/form-theme.html.twig */
class __TwigTemplate_bb3f4c9f12bd06b8c3593c9f29834c443d363c866b1da91190b6c15884c56875 extends Twig_Template
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
        $__internal_69cafd13bc497310e4034d6528d74b9c780d81554fefebe10f1a4309996c2c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cafd13bc497310e4034d6528d74b9c780d81554fefebe10f1a4309996c2c6d->enter($__internal_69cafd13bc497310e4034d6528d74b9c780d81554fefebe10f1a4309996c2c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/form-theme.html.twig"));

        $__internal_ef7f9a093a9fec89d54d63bf0ac646726322ad643f6ba868b1867c13c0315e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7f9a093a9fec89d54d63bf0ac646726322ad643f6ba868b1867c13c0315e3d->enter($__internal_ef7f9a093a9fec89d54d63bf0ac646726322ad643f6ba868b1867c13c0315e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69cafd13bc497310e4034d6528d74b9c780d81554fefebe10f1a4309996c2c6d->leave($__internal_69cafd13bc497310e4034d6528d74b9c780d81554fefebe10f1a4309996c2c6d_prof);

        
        $__internal_ef7f9a093a9fec89d54d63bf0ac646726322ad643f6ba868b1867c13c0315e3d->leave($__internal_ef7f9a093a9fec89d54d63bf0ac646726322ad643f6ba868b1867c13c0315e3d_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_1ede8cddb84347cf83ec23040fb755b4f399c9e3f5a5d926dcb9778387f34fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ede8cddb84347cf83ec23040fb755b4f399c9e3f5a5d926dcb9778387f34fcc->enter($__internal_1ede8cddb84347cf83ec23040fb755b4f399c9e3f5a5d926dcb9778387f34fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_69d98033db955d48bb53df05518c32bdd509eca327c46d19e755f7761e60c6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d98033db955d48bb53df05518c32bdd509eca327c46d19e755f7761e60c6e4->enter($__internal_69d98033db955d48bb53df05518c32bdd509eca327c46d19e755f7761e60c6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_69d98033db955d48bb53df05518c32bdd509eca327c46d19e755f7761e60c6e4->leave($__internal_69d98033db955d48bb53df05518c32bdd509eca327c46d19e755f7761e60c6e4_prof);

        
        $__internal_1ede8cddb84347cf83ec23040fb755b4f399c9e3f5a5d926dcb9778387f34fcc->leave($__internal_1ede8cddb84347cf83ec23040fb755b4f399c9e3f5a5d926dcb9778387f34fcc_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ba5b00fd50153a64a376748ec040c42c9fb2e55094ce46358a4bcee042ea2734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5b00fd50153a64a376748ec040c42c9fb2e55094ce46358a4bcee042ea2734->enter($__internal_ba5b00fd50153a64a376748ec040c42c9fb2e55094ce46358a4bcee042ea2734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ef590857d70882b265e8dafa97ac661ad45d2a3e037e77c1b5681df51873d663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef590857d70882b265e8dafa97ac661ad45d2a3e037e77c1b5681df51873d663->enter($__internal_ef590857d70882b265e8dafa97ac661ad45d2a3e037e77c1b5681df51873d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_ef590857d70882b265e8dafa97ac661ad45d2a3e037e77c1b5681df51873d663->leave($__internal_ef590857d70882b265e8dafa97ac661ad45d2a3e037e77c1b5681df51873d663_prof);

        
        $__internal_ba5b00fd50153a64a376748ec040c42c9fb2e55094ce46358a4bcee042ea2734->leave($__internal_ba5b00fd50153a64a376748ec040c42c9fb2e55094ce46358a4bcee042ea2734_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_342775618b34de6e598ae73fa106d0c66cf09a2c8524a4a58244e1b8294bbc5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342775618b34de6e598ae73fa106d0c66cf09a2c8524a4a58244e1b8294bbc5c->enter($__internal_342775618b34de6e598ae73fa106d0c66cf09a2c8524a4a58244e1b8294bbc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_080051c6ff65f26d57a7503035fe897da5bbc5c2629d2f61c00f1414a6d9db4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080051c6ff65f26d57a7503035fe897da5bbc5c2629d2f61c00f1414a6d9db4c->enter($__internal_080051c6ff65f26d57a7503035fe897da5bbc5c2629d2f61c00f1414a6d9db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "form-control"));
        // line 35
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_080051c6ff65f26d57a7503035fe897da5bbc5c2629d2f61c00f1414a6d9db4c->leave($__internal_080051c6ff65f26d57a7503035fe897da5bbc5c2629d2f61c00f1414a6d9db4c_prof);

        
        $__internal_342775618b34de6e598ae73fa106d0c66cf09a2c8524a4a58244e1b8294bbc5c->leave($__internal_342775618b34de6e598ae73fa106d0c66cf09a2c8524a4a58244e1b8294bbc5c_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_13b1dbdb13e0d572dd5364853ffe34c6d9a3a967185b221e331bee3e5733d781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b1dbdb13e0d572dd5364853ffe34c6d9a3a967185b221e331bee3e5733d781->enter($__internal_13b1dbdb13e0d572dd5364853ffe34c6d9a3a967185b221e331bee3e5733d781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6431e84918d7e04edd8707765ae0e140b4a49cd2b28ae6aa16fdb4eec29578fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6431e84918d7e04edd8707765ae0e140b4a49cd2b28ae6aa16fdb4eec29578fb->enter($__internal_6431e84918d7e04edd8707765ae0e140b4a49cd2b28ae6aa16fdb4eec29578fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6431e84918d7e04edd8707765ae0e140b4a49cd2b28ae6aa16fdb4eec29578fb->leave($__internal_6431e84918d7e04edd8707765ae0e140b4a49cd2b28ae6aa16fdb4eec29578fb_prof);

        
        $__internal_13b1dbdb13e0d572dd5364853ffe34c6d9a3a967185b221e331bee3e5733d781->leave($__internal_13b1dbdb13e0d572dd5364853ffe34c6d9a3a967185b221e331bee3e5733d781_prof);

    }

    // line 61
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0a69389d081a8c3ca510b2efcd18a97823773c20f08937fe9981782c1b88ffff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a69389d081a8c3ca510b2efcd18a97823773c20f08937fe9981782c1b88ffff->enter($__internal_0a69389d081a8c3ca510b2efcd18a97823773c20f08937fe9981782c1b88ffff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e14be3558e6e70a70b55b4882d68e968803aca873ad4b0886495c562fd7b8b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14be3558e6e70a70b55b4882d68e968803aca873ad4b0886495c562fd7b8b77->enter($__internal_e14be3558e6e70a70b55b4882d68e968803aca873ad4b0886495c562fd7b8b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e14be3558e6e70a70b55b4882d68e968803aca873ad4b0886495c562fd7b8b77->leave($__internal_e14be3558e6e70a70b55b4882d68e968803aca873ad4b0886495c562fd7b8b77_prof);

        
        $__internal_0a69389d081a8c3ca510b2efcd18a97823773c20f08937fe9981782c1b88ffff->leave($__internal_0a69389d081a8c3ca510b2efcd18a97823773c20f08937fe9981782c1b88ffff_prof);

    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_172883a828b7050e8e1865dc21ae8c94195a4a15232fc7d706de30a05b0987b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172883a828b7050e8e1865dc21ae8c94195a4a15232fc7d706de30a05b0987b7->enter($__internal_172883a828b7050e8e1865dc21ae8c94195a4a15232fc7d706de30a05b0987b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c645d6f6783b8d453463af5c6114a5bc4e0510b2e3551732864e52e2f6060d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645d6f6783b8d453463af5c6114a5bc4e0510b2e3551732864e52e2f6060d6d->enter($__internal_c645d6f6783b8d453463af5c6114a5bc4e0510b2e3551732864e52e2f6060d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_c645d6f6783b8d453463af5c6114a5bc4e0510b2e3551732864e52e2f6060d6d->leave($__internal_c645d6f6783b8d453463af5c6114a5bc4e0510b2e3551732864e52e2f6060d6d_prof);

        
        $__internal_172883a828b7050e8e1865dc21ae8c94195a4a15232fc7d706de30a05b0987b7->leave($__internal_172883a828b7050e8e1865dc21ae8c94195a4a15232fc7d706de30a05b0987b7_prof);

    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1da043546c41301840114f2e214305675ad7244674fb79c98bd5d920563b4ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da043546c41301840114f2e214305675ad7244674fb79c98bd5d920563b4ebc->enter($__internal_1da043546c41301840114f2e214305675ad7244674fb79c98bd5d920563b4ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ab870e1e1f1a858e4a0cda2344bbcd3ead5c1362f8837ac984e19f97d8e473b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab870e1e1f1a858e4a0cda2344bbcd3ead5c1362f8837ac984e19f97d8e473b2->enter($__internal_ab870e1e1f1a858e4a0cda2344bbcd3ead5c1362f8837ac984e19f97d8e473b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_ab870e1e1f1a858e4a0cda2344bbcd3ead5c1362f8837ac984e19f97d8e473b2->leave($__internal_ab870e1e1f1a858e4a0cda2344bbcd3ead5c1362f8837ac984e19f97d8e473b2_prof);

        
        $__internal_1da043546c41301840114f2e214305675ad7244674fb79c98bd5d920563b4ebc->leave($__internal_1da043546c41301840114f2e214305675ad7244674fb79c98bd5d920563b4ebc_prof);

    }

    // line 135
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e2f6db83528cc547e5db202205036310898454122674d6ad1340b2732f424257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f6db83528cc547e5db202205036310898454122674d6ad1340b2732f424257->enter($__internal_e2f6db83528cc547e5db202205036310898454122674d6ad1340b2732f424257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_93b145a2e376ad2f63d15b5d6ce65b10ea86585a0e0a94d721c453312e6a231b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b145a2e376ad2f63d15b5d6ce65b10ea86585a0e0a94d721c453312e6a231b->enter($__internal_93b145a2e376ad2f63d15b5d6ce65b10ea86585a0e0a94d721c453312e6a231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_93b145a2e376ad2f63d15b5d6ce65b10ea86585a0e0a94d721c453312e6a231b->leave($__internal_93b145a2e376ad2f63d15b5d6ce65b10ea86585a0e0a94d721c453312e6a231b_prof);

        
        $__internal_e2f6db83528cc547e5db202205036310898454122674d6ad1340b2732f424257->leave($__internal_e2f6db83528cc547e5db202205036310898454122674d6ad1340b2732f424257_prof);

    }

    // line 151
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_446f2faf2b18d69c37fd3a2b06e7c48ec04c97db7782ed4b3f1e88756f57f795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446f2faf2b18d69c37fd3a2b06e7c48ec04c97db7782ed4b3f1e88756f57f795->enter($__internal_446f2faf2b18d69c37fd3a2b06e7c48ec04c97db7782ed4b3f1e88756f57f795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f7ad1110adc76a526c610ac2301d179ccc09866dcd3fc4ad957c920057daf18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ad1110adc76a526c610ac2301d179ccc09866dcd3fc4ad957c920057daf18a->enter($__internal_f7ad1110adc76a526c610ac2301d179ccc09866dcd3fc4ad957c920057daf18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f7ad1110adc76a526c610ac2301d179ccc09866dcd3fc4ad957c920057daf18a->leave($__internal_f7ad1110adc76a526c610ac2301d179ccc09866dcd3fc4ad957c920057daf18a_prof);

        
        $__internal_446f2faf2b18d69c37fd3a2b06e7c48ec04c97db7782ed4b3f1e88756f57f795->leave($__internal_446f2faf2b18d69c37fd3a2b06e7c48ec04c97db7782ed4b3f1e88756f57f795_prof);

    }

    // line 164
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e82cb3cf7483793544ce3027f2169f4957056f5df501686a1ab478b72c791421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82cb3cf7483793544ce3027f2169f4957056f5df501686a1ab478b72c791421->enter($__internal_e82cb3cf7483793544ce3027f2169f4957056f5df501686a1ab478b72c791421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_afe050d4b6b55e913d9f65b64b6e23e9bf86375a295ea5ccee4a6bfa335d039b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe050d4b6b55e913d9f65b64b6e23e9bf86375a295ea5ccee4a6bfa335d039b->enter($__internal_afe050d4b6b55e913d9f65b64b6e23e9bf86375a295ea5ccee4a6bfa335d039b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_afe050d4b6b55e913d9f65b64b6e23e9bf86375a295ea5ccee4a6bfa335d039b->leave($__internal_afe050d4b6b55e913d9f65b64b6e23e9bf86375a295ea5ccee4a6bfa335d039b_prof);

        
        $__internal_e82cb3cf7483793544ce3027f2169f4957056f5df501686a1ab478b72c791421->leave($__internal_e82cb3cf7483793544ce3027f2169f4957056f5df501686a1ab478b72c791421_prof);

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
