<?php

/* AvanzuAdminThemeBundle:layout:form-theme.html.twig */
class __TwigTemplate_1711f7574cc85c4ffee7d251d96f0a5ff41476cf80159a03c14be0257cbb2276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "AvanzuAdminThemeBundle:layout:form-theme.html.twig", 1);
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
        $__internal_6ede0dd28bb63bce80afff32bd2ca1a1a897fdc27d952a1d983ebca5809c64c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ede0dd28bb63bce80afff32bd2ca1a1a897fdc27d952a1d983ebca5809c64c3->enter($__internal_6ede0dd28bb63bce80afff32bd2ca1a1a897fdc27d952a1d983ebca5809c64c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:form-theme.html.twig"));

        $__internal_b993b9b33d74ef684ee5989b6685f159eef9bbde58c08f0f6105d1a82c1b011d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b993b9b33d74ef684ee5989b6685f159eef9bbde58c08f0f6105d1a82c1b011d->enter($__internal_b993b9b33d74ef684ee5989b6685f159eef9bbde58c08f0f6105d1a82c1b011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ede0dd28bb63bce80afff32bd2ca1a1a897fdc27d952a1d983ebca5809c64c3->leave($__internal_6ede0dd28bb63bce80afff32bd2ca1a1a897fdc27d952a1d983ebca5809c64c3_prof);

        
        $__internal_b993b9b33d74ef684ee5989b6685f159eef9bbde58c08f0f6105d1a82c1b011d->leave($__internal_b993b9b33d74ef684ee5989b6685f159eef9bbde58c08f0f6105d1a82c1b011d_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_54d7873d37b340b83f965ddc6b38a939d88d9c13b0d4fff84253537ac591db58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d7873d37b340b83f965ddc6b38a939d88d9c13b0d4fff84253537ac591db58->enter($__internal_54d7873d37b340b83f965ddc6b38a939d88d9c13b0d4fff84253537ac591db58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_1d59e68ecb25d01abc4667ed0a5f1a4b052f3ad09756e598bcb9f3a1b9ae583f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d59e68ecb25d01abc4667ed0a5f1a4b052f3ad09756e598bcb9f3a1b9ae583f->enter($__internal_1d59e68ecb25d01abc4667ed0a5f1a4b052f3ad09756e598bcb9f3a1b9ae583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_1d59e68ecb25d01abc4667ed0a5f1a4b052f3ad09756e598bcb9f3a1b9ae583f->leave($__internal_1d59e68ecb25d01abc4667ed0a5f1a4b052f3ad09756e598bcb9f3a1b9ae583f_prof);

        
        $__internal_54d7873d37b340b83f965ddc6b38a939d88d9c13b0d4fff84253537ac591db58->leave($__internal_54d7873d37b340b83f965ddc6b38a939d88d9c13b0d4fff84253537ac591db58_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b2d9f7b8fdf0fe66a84230c15e6c3d309677881a9974ec580e2d6740f5864db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d9f7b8fdf0fe66a84230c15e6c3d309677881a9974ec580e2d6740f5864db7->enter($__internal_b2d9f7b8fdf0fe66a84230c15e6c3d309677881a9974ec580e2d6740f5864db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_fbe0d5dc21a99165dfc7661da9f761c72dcd8c0817c7f3805ad4a17772826e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe0d5dc21a99165dfc7661da9f761c72dcd8c0817c7f3805ad4a17772826e0e->enter($__internal_fbe0d5dc21a99165dfc7661da9f761c72dcd8c0817c7f3805ad4a17772826e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_fbe0d5dc21a99165dfc7661da9f761c72dcd8c0817c7f3805ad4a17772826e0e->leave($__internal_fbe0d5dc21a99165dfc7661da9f761c72dcd8c0817c7f3805ad4a17772826e0e_prof);

        
        $__internal_b2d9f7b8fdf0fe66a84230c15e6c3d309677881a9974ec580e2d6740f5864db7->leave($__internal_b2d9f7b8fdf0fe66a84230c15e6c3d309677881a9974ec580e2d6740f5864db7_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1f8fe6cd158f0feb1bfcf4acaa935a322cae22148866615833ed05e290d15c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8fe6cd158f0feb1bfcf4acaa935a322cae22148866615833ed05e290d15c20->enter($__internal_1f8fe6cd158f0feb1bfcf4acaa935a322cae22148866615833ed05e290d15c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_22f2e1619bc76306cf6645f305065c956df110191ea8de2fd0e37da973a48f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f2e1619bc76306cf6645f305065c956df110191ea8de2fd0e37da973a48f21->enter($__internal_22f2e1619bc76306cf6645f305065c956df110191ea8de2fd0e37da973a48f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "form-control"));
        // line 35
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_22f2e1619bc76306cf6645f305065c956df110191ea8de2fd0e37da973a48f21->leave($__internal_22f2e1619bc76306cf6645f305065c956df110191ea8de2fd0e37da973a48f21_prof);

        
        $__internal_1f8fe6cd158f0feb1bfcf4acaa935a322cae22148866615833ed05e290d15c20->leave($__internal_1f8fe6cd158f0feb1bfcf4acaa935a322cae22148866615833ed05e290d15c20_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_20a5b8fce681a36937efab46a98976406f1e15e334ef6003a380a6947f0e385a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a5b8fce681a36937efab46a98976406f1e15e334ef6003a380a6947f0e385a->enter($__internal_20a5b8fce681a36937efab46a98976406f1e15e334ef6003a380a6947f0e385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9f1edc0cbdd746fbd33e95c032b620835a9142095cb7dcbbcfaa004a350d7d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1edc0cbdd746fbd33e95c032b620835a9142095cb7dcbbcfaa004a350d7d52->enter($__internal_9f1edc0cbdd746fbd33e95c032b620835a9142095cb7dcbbcfaa004a350d7d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9f1edc0cbdd746fbd33e95c032b620835a9142095cb7dcbbcfaa004a350d7d52->leave($__internal_9f1edc0cbdd746fbd33e95c032b620835a9142095cb7dcbbcfaa004a350d7d52_prof);

        
        $__internal_20a5b8fce681a36937efab46a98976406f1e15e334ef6003a380a6947f0e385a->leave($__internal_20a5b8fce681a36937efab46a98976406f1e15e334ef6003a380a6947f0e385a_prof);

    }

    // line 61
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6ac01aa935fbd394a1c869a6a82da87a809802a86e0549adacc1122a818a6570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac01aa935fbd394a1c869a6a82da87a809802a86e0549adacc1122a818a6570->enter($__internal_6ac01aa935fbd394a1c869a6a82da87a809802a86e0549adacc1122a818a6570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f576b938f356e39240398f6882af2114d850d2661a81ae2a5f1ef13af11813e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f576b938f356e39240398f6882af2114d850d2661a81ae2a5f1ef13af11813e2->enter($__internal_f576b938f356e39240398f6882af2114d850d2661a81ae2a5f1ef13af11813e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f576b938f356e39240398f6882af2114d850d2661a81ae2a5f1ef13af11813e2->leave($__internal_f576b938f356e39240398f6882af2114d850d2661a81ae2a5f1ef13af11813e2_prof);

        
        $__internal_6ac01aa935fbd394a1c869a6a82da87a809802a86e0549adacc1122a818a6570->leave($__internal_6ac01aa935fbd394a1c869a6a82da87a809802a86e0549adacc1122a818a6570_prof);

    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a2d6da089d5c51a8e1d57a241e3f32b17a876aa420b6a0223197abde0ba815ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d6da089d5c51a8e1d57a241e3f32b17a876aa420b6a0223197abde0ba815ff->enter($__internal_a2d6da089d5c51a8e1d57a241e3f32b17a876aa420b6a0223197abde0ba815ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a9040100602ad3f8ceaaca9eaeeffc7d5e6d251c48ceb42e4739c82786ae3cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9040100602ad3f8ceaaca9eaeeffc7d5e6d251c48ceb42e4739c82786ae3cf2->enter($__internal_a9040100602ad3f8ceaaca9eaeeffc7d5e6d251c48ceb42e4739c82786ae3cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_a9040100602ad3f8ceaaca9eaeeffc7d5e6d251c48ceb42e4739c82786ae3cf2->leave($__internal_a9040100602ad3f8ceaaca9eaeeffc7d5e6d251c48ceb42e4739c82786ae3cf2_prof);

        
        $__internal_a2d6da089d5c51a8e1d57a241e3f32b17a876aa420b6a0223197abde0ba815ff->leave($__internal_a2d6da089d5c51a8e1d57a241e3f32b17a876aa420b6a0223197abde0ba815ff_prof);

    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_423565e3fa5c3ad078b91ae0ca00eba51f550af20a5c18c71beba5c0b46a9cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423565e3fa5c3ad078b91ae0ca00eba51f550af20a5c18c71beba5c0b46a9cb2->enter($__internal_423565e3fa5c3ad078b91ae0ca00eba51f550af20a5c18c71beba5c0b46a9cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8a7087de27ff0cb0d24b607f29caaa69adf1c06bf9bd6fae30681f5f968f3ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7087de27ff0cb0d24b607f29caaa69adf1c06bf9bd6fae30681f5f968f3ef1->enter($__internal_8a7087de27ff0cb0d24b607f29caaa69adf1c06bf9bd6fae30681f5f968f3ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_8a7087de27ff0cb0d24b607f29caaa69adf1c06bf9bd6fae30681f5f968f3ef1->leave($__internal_8a7087de27ff0cb0d24b607f29caaa69adf1c06bf9bd6fae30681f5f968f3ef1_prof);

        
        $__internal_423565e3fa5c3ad078b91ae0ca00eba51f550af20a5c18c71beba5c0b46a9cb2->leave($__internal_423565e3fa5c3ad078b91ae0ca00eba51f550af20a5c18c71beba5c0b46a9cb2_prof);

    }

    // line 135
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d5c35ddcdfcc94562f5b6169143c42deba8f2ddc47b56061d611b46ffc69eb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c35ddcdfcc94562f5b6169143c42deba8f2ddc47b56061d611b46ffc69eb70->enter($__internal_d5c35ddcdfcc94562f5b6169143c42deba8f2ddc47b56061d611b46ffc69eb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4842b517ca063a90ef79e69589d8803ba61453d1ceb85351e8e15037cc4dc8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4842b517ca063a90ef79e69589d8803ba61453d1ceb85351e8e15037cc4dc8ad->enter($__internal_4842b517ca063a90ef79e69589d8803ba61453d1ceb85351e8e15037cc4dc8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4842b517ca063a90ef79e69589d8803ba61453d1ceb85351e8e15037cc4dc8ad->leave($__internal_4842b517ca063a90ef79e69589d8803ba61453d1ceb85351e8e15037cc4dc8ad_prof);

        
        $__internal_d5c35ddcdfcc94562f5b6169143c42deba8f2ddc47b56061d611b46ffc69eb70->leave($__internal_d5c35ddcdfcc94562f5b6169143c42deba8f2ddc47b56061d611b46ffc69eb70_prof);

    }

    // line 151
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_10c18fccae59d8b1be0ca5507948f5e15dec28df171b7126c1f403cf53e91364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c18fccae59d8b1be0ca5507948f5e15dec28df171b7126c1f403cf53e91364->enter($__internal_10c18fccae59d8b1be0ca5507948f5e15dec28df171b7126c1f403cf53e91364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1a262c4e6702c9cacfdf83a631e52b8f73a4ced264a956e455884bb6adae60ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a262c4e6702c9cacfdf83a631e52b8f73a4ced264a956e455884bb6adae60ff->enter($__internal_1a262c4e6702c9cacfdf83a631e52b8f73a4ced264a956e455884bb6adae60ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_1a262c4e6702c9cacfdf83a631e52b8f73a4ced264a956e455884bb6adae60ff->leave($__internal_1a262c4e6702c9cacfdf83a631e52b8f73a4ced264a956e455884bb6adae60ff_prof);

        
        $__internal_10c18fccae59d8b1be0ca5507948f5e15dec28df171b7126c1f403cf53e91364->leave($__internal_10c18fccae59d8b1be0ca5507948f5e15dec28df171b7126c1f403cf53e91364_prof);

    }

    // line 164
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_37b767bd0e229e3731e97dae66213ffbc511d8f864a44264c6afe084b902a2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b767bd0e229e3731e97dae66213ffbc511d8f864a44264c6afe084b902a2a6->enter($__internal_37b767bd0e229e3731e97dae66213ffbc511d8f864a44264c6afe084b902a2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e90c4e0e739ab85b1ae0ed91d5f400c28eb5d177b95089b4e93298a89e916d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90c4e0e739ab85b1ae0ed91d5f400c28eb5d177b95089b4e93298a89e916d3d->enter($__internal_e90c4e0e739ab85b1ae0ed91d5f400c28eb5d177b95089b4e93298a89e916d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e90c4e0e739ab85b1ae0ed91d5f400c28eb5d177b95089b4e93298a89e916d3d->leave($__internal_e90c4e0e739ab85b1ae0ed91d5f400c28eb5d177b95089b4e93298a89e916d3d_prof);

        
        $__internal_37b767bd0e229e3731e97dae66213ffbc511d8f864a44264c6afe084b902a2a6->leave($__internal_37b767bd0e229e3731e97dae66213ffbc511d8f864a44264c6afe084b902a2a6_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:form-theme.html.twig";
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
", "AvanzuAdminThemeBundle:layout:form-theme.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/layout/form-theme.html.twig");
    }
}
