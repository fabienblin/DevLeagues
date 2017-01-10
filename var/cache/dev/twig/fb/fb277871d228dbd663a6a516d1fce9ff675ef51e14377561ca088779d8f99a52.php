<?php

/* AvanzuAdminThemeBundle:layout:form-theme.html.twig */
class __TwigTemplate_86543dd148c78d0ea0c359c121d24e5d19142572b35df6463ec698e89bc85cbf extends Twig_Template
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
        $__internal_f5c07ad978be0d13c518a4e0aa294cc36685f99bb2311509e502bee08dd1a790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c07ad978be0d13c518a4e0aa294cc36685f99bb2311509e502bee08dd1a790->enter($__internal_f5c07ad978be0d13c518a4e0aa294cc36685f99bb2311509e502bee08dd1a790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:form-theme.html.twig"));

        $__internal_d6d5ced3e1dfa7342501b78999f4e744732223598a166d78b575424d754feb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d5ced3e1dfa7342501b78999f4e744732223598a166d78b575424d754feb92->enter($__internal_d6d5ced3e1dfa7342501b78999f4e744732223598a166d78b575424d754feb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c07ad978be0d13c518a4e0aa294cc36685f99bb2311509e502bee08dd1a790->leave($__internal_f5c07ad978be0d13c518a4e0aa294cc36685f99bb2311509e502bee08dd1a790_prof);

        
        $__internal_d6d5ced3e1dfa7342501b78999f4e744732223598a166d78b575424d754feb92->leave($__internal_d6d5ced3e1dfa7342501b78999f4e744732223598a166d78b575424d754feb92_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_d03e72901cdc5c980651a25e1bb31d36fb18e21d5c28507e7f6eeda6f41ad7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03e72901cdc5c980651a25e1bb31d36fb18e21d5c28507e7f6eeda6f41ad7c3->enter($__internal_d03e72901cdc5c980651a25e1bb31d36fb18e21d5c28507e7f6eeda6f41ad7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_99c45f32fb6c8f598f2b0466d01421610130a95483940083aeb8a3d8f6ce6da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c45f32fb6c8f598f2b0466d01421610130a95483940083aeb8a3d8f6ce6da9->enter($__internal_99c45f32fb6c8f598f2b0466d01421610130a95483940083aeb8a3d8f6ce6da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_99c45f32fb6c8f598f2b0466d01421610130a95483940083aeb8a3d8f6ce6da9->leave($__internal_99c45f32fb6c8f598f2b0466d01421610130a95483940083aeb8a3d8f6ce6da9_prof);

        
        $__internal_d03e72901cdc5c980651a25e1bb31d36fb18e21d5c28507e7f6eeda6f41ad7c3->leave($__internal_d03e72901cdc5c980651a25e1bb31d36fb18e21d5c28507e7f6eeda6f41ad7c3_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d7dfcb6f1114461f241608a26fef17dec9fa3b88a92518c51ad2b927e383287b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dfcb6f1114461f241608a26fef17dec9fa3b88a92518c51ad2b927e383287b->enter($__internal_d7dfcb6f1114461f241608a26fef17dec9fa3b88a92518c51ad2b927e383287b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1ee5065077de5036d4b72b82325d1c85e51fb5c46cd78fc085fcf4153b246ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee5065077de5036d4b72b82325d1c85e51fb5c46cd78fc085fcf4153b246ddf->enter($__internal_1ee5065077de5036d4b72b82325d1c85e51fb5c46cd78fc085fcf4153b246ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_1ee5065077de5036d4b72b82325d1c85e51fb5c46cd78fc085fcf4153b246ddf->leave($__internal_1ee5065077de5036d4b72b82325d1c85e51fb5c46cd78fc085fcf4153b246ddf_prof);

        
        $__internal_d7dfcb6f1114461f241608a26fef17dec9fa3b88a92518c51ad2b927e383287b->leave($__internal_d7dfcb6f1114461f241608a26fef17dec9fa3b88a92518c51ad2b927e383287b_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_79c03b477a357ec89c245344395eaf08c37a3068f8791d891f387852743b1717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c03b477a357ec89c245344395eaf08c37a3068f8791d891f387852743b1717->enter($__internal_79c03b477a357ec89c245344395eaf08c37a3068f8791d891f387852743b1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_89fd44d9fe94afe36aad1d5d0b6f7ce2aa1f3526c4fb47521c83c35db484886c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd44d9fe94afe36aad1d5d0b6f7ce2aa1f3526c4fb47521c83c35db484886c->enter($__internal_89fd44d9fe94afe36aad1d5d0b6f7ce2aa1f3526c4fb47521c83c35db484886c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "form-control"));
        // line 35
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_89fd44d9fe94afe36aad1d5d0b6f7ce2aa1f3526c4fb47521c83c35db484886c->leave($__internal_89fd44d9fe94afe36aad1d5d0b6f7ce2aa1f3526c4fb47521c83c35db484886c_prof);

        
        $__internal_79c03b477a357ec89c245344395eaf08c37a3068f8791d891f387852743b1717->leave($__internal_79c03b477a357ec89c245344395eaf08c37a3068f8791d891f387852743b1717_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b1d05b61d4fdde46b00b52e9f05158a569109f6cf8b7d91f441aeb0dfc315a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d05b61d4fdde46b00b52e9f05158a569109f6cf8b7d91f441aeb0dfc315a79->enter($__internal_b1d05b61d4fdde46b00b52e9f05158a569109f6cf8b7d91f441aeb0dfc315a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_25467d5cee6743a6762f5869ef9f08eff43d97df9c9f45f3d3a882744c8dfefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25467d5cee6743a6762f5869ef9f08eff43d97df9c9f45f3d3a882744c8dfefc->enter($__internal_25467d5cee6743a6762f5869ef9f08eff43d97df9c9f45f3d3a882744c8dfefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_25467d5cee6743a6762f5869ef9f08eff43d97df9c9f45f3d3a882744c8dfefc->leave($__internal_25467d5cee6743a6762f5869ef9f08eff43d97df9c9f45f3d3a882744c8dfefc_prof);

        
        $__internal_b1d05b61d4fdde46b00b52e9f05158a569109f6cf8b7d91f441aeb0dfc315a79->leave($__internal_b1d05b61d4fdde46b00b52e9f05158a569109f6cf8b7d91f441aeb0dfc315a79_prof);

    }

    // line 61
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a2478f94ba4e48c079f69235ef81110a1a3ea3239b8a5886b7a7c693c652999a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2478f94ba4e48c079f69235ef81110a1a3ea3239b8a5886b7a7c693c652999a->enter($__internal_a2478f94ba4e48c079f69235ef81110a1a3ea3239b8a5886b7a7c693c652999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8b308d2a459b3b02badc493b7727acb87ad954ae5ce327ed8db87bc539b6d93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b308d2a459b3b02badc493b7727acb87ad954ae5ce327ed8db87bc539b6d93b->enter($__internal_8b308d2a459b3b02badc493b7727acb87ad954ae5ce327ed8db87bc539b6d93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8b308d2a459b3b02badc493b7727acb87ad954ae5ce327ed8db87bc539b6d93b->leave($__internal_8b308d2a459b3b02badc493b7727acb87ad954ae5ce327ed8db87bc539b6d93b_prof);

        
        $__internal_a2478f94ba4e48c079f69235ef81110a1a3ea3239b8a5886b7a7c693c652999a->leave($__internal_a2478f94ba4e48c079f69235ef81110a1a3ea3239b8a5886b7a7c693c652999a_prof);

    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_332cee54bf0b61fdb6f698073384d7cdb11b196c4fb6097961b09603cb69830f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332cee54bf0b61fdb6f698073384d7cdb11b196c4fb6097961b09603cb69830f->enter($__internal_332cee54bf0b61fdb6f698073384d7cdb11b196c4fb6097961b09603cb69830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_92948614f2b55e5128f389037feed08e442d951e88c5af21d686fc708cdb8b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92948614f2b55e5128f389037feed08e442d951e88c5af21d686fc708cdb8b02->enter($__internal_92948614f2b55e5128f389037feed08e442d951e88c5af21d686fc708cdb8b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_92948614f2b55e5128f389037feed08e442d951e88c5af21d686fc708cdb8b02->leave($__internal_92948614f2b55e5128f389037feed08e442d951e88c5af21d686fc708cdb8b02_prof);

        
        $__internal_332cee54bf0b61fdb6f698073384d7cdb11b196c4fb6097961b09603cb69830f->leave($__internal_332cee54bf0b61fdb6f698073384d7cdb11b196c4fb6097961b09603cb69830f_prof);

    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f312787182f3f7f31de8ee6cc2e8ac192ca7e7e9a169fd2910ee1ea97a8db1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f312787182f3f7f31de8ee6cc2e8ac192ca7e7e9a169fd2910ee1ea97a8db1f8->enter($__internal_f312787182f3f7f31de8ee6cc2e8ac192ca7e7e9a169fd2910ee1ea97a8db1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_568284dfe8918fb2d68a62c1088e60fd6325cd79b89baadac625491864bde2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568284dfe8918fb2d68a62c1088e60fd6325cd79b89baadac625491864bde2d3->enter($__internal_568284dfe8918fb2d68a62c1088e60fd6325cd79b89baadac625491864bde2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_568284dfe8918fb2d68a62c1088e60fd6325cd79b89baadac625491864bde2d3->leave($__internal_568284dfe8918fb2d68a62c1088e60fd6325cd79b89baadac625491864bde2d3_prof);

        
        $__internal_f312787182f3f7f31de8ee6cc2e8ac192ca7e7e9a169fd2910ee1ea97a8db1f8->leave($__internal_f312787182f3f7f31de8ee6cc2e8ac192ca7e7e9a169fd2910ee1ea97a8db1f8_prof);

    }

    // line 135
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a0b84b4f2f1db73a286b666f616eca3d140e4d26cff9edc7d7fd430653589045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b84b4f2f1db73a286b666f616eca3d140e4d26cff9edc7d7fd430653589045->enter($__internal_a0b84b4f2f1db73a286b666f616eca3d140e4d26cff9edc7d7fd430653589045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_452962a71f1b1c203407a5bfacbcfc172484c4a70c47649912ab01365976a8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452962a71f1b1c203407a5bfacbcfc172484c4a70c47649912ab01365976a8b0->enter($__internal_452962a71f1b1c203407a5bfacbcfc172484c4a70c47649912ab01365976a8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_452962a71f1b1c203407a5bfacbcfc172484c4a70c47649912ab01365976a8b0->leave($__internal_452962a71f1b1c203407a5bfacbcfc172484c4a70c47649912ab01365976a8b0_prof);

        
        $__internal_a0b84b4f2f1db73a286b666f616eca3d140e4d26cff9edc7d7fd430653589045->leave($__internal_a0b84b4f2f1db73a286b666f616eca3d140e4d26cff9edc7d7fd430653589045_prof);

    }

    // line 151
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a6aafc3fced5fd0959cd119c9b0fd2f256b469be80a59e5f31ceaeb03a0b4601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6aafc3fced5fd0959cd119c9b0fd2f256b469be80a59e5f31ceaeb03a0b4601->enter($__internal_a6aafc3fced5fd0959cd119c9b0fd2f256b469be80a59e5f31ceaeb03a0b4601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e1359cad9b233e5161b32159d8947ac63f399bea64c986e65cf0ef4088ea5d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1359cad9b233e5161b32159d8947ac63f399bea64c986e65cf0ef4088ea5d0b->enter($__internal_e1359cad9b233e5161b32159d8947ac63f399bea64c986e65cf0ef4088ea5d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_e1359cad9b233e5161b32159d8947ac63f399bea64c986e65cf0ef4088ea5d0b->leave($__internal_e1359cad9b233e5161b32159d8947ac63f399bea64c986e65cf0ef4088ea5d0b_prof);

        
        $__internal_a6aafc3fced5fd0959cd119c9b0fd2f256b469be80a59e5f31ceaeb03a0b4601->leave($__internal_a6aafc3fced5fd0959cd119c9b0fd2f256b469be80a59e5f31ceaeb03a0b4601_prof);

    }

    // line 164
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fd28e73b1eb1aa6056f7f690aaaafe4aa05c7a2051afc827b93113ab307352a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd28e73b1eb1aa6056f7f690aaaafe4aa05c7a2051afc827b93113ab307352a6->enter($__internal_fd28e73b1eb1aa6056f7f690aaaafe4aa05c7a2051afc827b93113ab307352a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_006cbea1e7c825cb0805997d294638ac4c8fce843897e87cf139ba7955ec6626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006cbea1e7c825cb0805997d294638ac4c8fce843897e87cf139ba7955ec6626->enter($__internal_006cbea1e7c825cb0805997d294638ac4c8fce843897e87cf139ba7955ec6626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_006cbea1e7c825cb0805997d294638ac4c8fce843897e87cf139ba7955ec6626->leave($__internal_006cbea1e7c825cb0805997d294638ac4c8fce843897e87cf139ba7955ec6626_prof);

        
        $__internal_fd28e73b1eb1aa6056f7f690aaaafe4aa05c7a2051afc827b93113ab307352a6->leave($__internal_fd28e73b1eb1aa6056f7f690aaaafe4aa05c7a2051afc827b93113ab307352a6_prof);

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
