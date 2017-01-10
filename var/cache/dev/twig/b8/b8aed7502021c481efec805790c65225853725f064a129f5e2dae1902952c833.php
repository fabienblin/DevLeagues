<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_77f33b261203ebe0c24e03e7180c1d181a957f1c12d06f87568f52cfc94093e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2d3514fd746fea6869e7080f1584599f3a2be50339436863c8566a7efd80965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d3514fd746fea6869e7080f1584599f3a2be50339436863c8566a7efd80965->enter($__internal_b2d3514fd746fea6869e7080f1584599f3a2be50339436863c8566a7efd80965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_241401eca947b7dfa076bead3d88ebb4c74e769fce9dc68cde4f26d1d57f1589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241401eca947b7dfa076bead3d88ebb4c74e769fce9dc68cde4f26d1d57f1589->enter($__internal_241401eca947b7dfa076bead3d88ebb4c74e769fce9dc68cde4f26d1d57f1589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d3514fd746fea6869e7080f1584599f3a2be50339436863c8566a7efd80965->leave($__internal_b2d3514fd746fea6869e7080f1584599f3a2be50339436863c8566a7efd80965_prof);

        
        $__internal_241401eca947b7dfa076bead3d88ebb4c74e769fce9dc68cde4f26d1d57f1589->leave($__internal_241401eca947b7dfa076bead3d88ebb4c74e769fce9dc68cde4f26d1d57f1589_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b2909c9f2ce088a6862b2d034ddeb5ab6d91eaaaea9cd39846914209fede83db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2909c9f2ce088a6862b2d034ddeb5ab6d91eaaaea9cd39846914209fede83db->enter($__internal_b2909c9f2ce088a6862b2d034ddeb5ab6d91eaaaea9cd39846914209fede83db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5c0b68b6d8b6ae0662c2240299cba59c3cba2f8947f76f9a69e0878bfe720462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0b68b6d8b6ae0662c2240299cba59c3cba2f8947f76f9a69e0878bfe720462->enter($__internal_5c0b68b6d8b6ae0662c2240299cba59c3cba2f8947f76f9a69e0878bfe720462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_5c0b68b6d8b6ae0662c2240299cba59c3cba2f8947f76f9a69e0878bfe720462->leave($__internal_5c0b68b6d8b6ae0662c2240299cba59c3cba2f8947f76f9a69e0878bfe720462_prof);

        
        $__internal_b2909c9f2ce088a6862b2d034ddeb5ab6d91eaaaea9cd39846914209fede83db->leave($__internal_b2909c9f2ce088a6862b2d034ddeb5ab6d91eaaaea9cd39846914209fede83db_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_accdb079e74feb288ce8143520b1568804d7c15c8c6f240f9839a519b2886430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accdb079e74feb288ce8143520b1568804d7c15c8c6f240f9839a519b2886430->enter($__internal_accdb079e74feb288ce8143520b1568804d7c15c8c6f240f9839a519b2886430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        $__internal_7a3f349783b1a6a6df662f6fbac7c78c29243ff8319c98bb89a1771705605fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3f349783b1a6a6df662f6fbac7c78c29243ff8319c98bb89a1771705605fcd->enter($__internal_7a3f349783b1a6a6df662f6fbac7c78c29243ff8319c98bb89a1771705605fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && ($context["sonata_help"] ?? $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7a3f349783b1a6a6df662f6fbac7c78c29243ff8319c98bb89a1771705605fcd->leave($__internal_7a3f349783b1a6a6df662f6fbac7c78c29243ff8319c98bb89a1771705605fcd_prof);

        
        $__internal_accdb079e74feb288ce8143520b1568804d7c15c8c6f240f9839a519b2886430->leave($__internal_accdb079e74feb288ce8143520b1568804d7c15c8c6f240f9839a519b2886430_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_e5aa01bfdcd946e79be8a4a74ccb6d170beb0e2dc59e3fad728585f92fb51d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aa01bfdcd946e79be8a4a74ccb6d170beb0e2dc59e3fad728585f92fb51d02->enter($__internal_e5aa01bfdcd946e79be8a4a74ccb6d170beb0e2dc59e3fad728585f92fb51d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_a2d2d72035b890d5ebf25a708d6f07c010775fd9f4fc9839b5eb859b71016794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d2d72035b890d5ebf25a708d6f07c010775fd9f4fc9839b5eb859b71016794->enter($__internal_a2d2d72035b890d5ebf25a708d6f07c010775fd9f4fc9839b5eb859b71016794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_a2d2d72035b890d5ebf25a708d6f07c010775fd9f4fc9839b5eb859b71016794->leave($__internal_a2d2d72035b890d5ebf25a708d6f07c010775fd9f4fc9839b5eb859b71016794_prof);

        
        $__internal_e5aa01bfdcd946e79be8a4a74ccb6d170beb0e2dc59e3fad728585f92fb51d02->leave($__internal_e5aa01bfdcd946e79be8a4a74ccb6d170beb0e2dc59e3fad728585f92fb51d02_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_135cf3fd66e1a2c93e1e2a7e6e911ae13f23e9d94365c759afc33061c04b6f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135cf3fd66e1a2c93e1e2a7e6e911ae13f23e9d94365c759afc33061c04b6f6e->enter($__internal_135cf3fd66e1a2c93e1e2a7e6e911ae13f23e9d94365c759afc33061c04b6f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7c24fb78cdbb731660db2ea400ee05f8c96a997ae78faa42896a8911d2736721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c24fb78cdbb731660db2ea400ee05f8c96a997ae78faa42896a8911d2736721->enter($__internal_7c24fb78cdbb731660db2ea400ee05f8c96a997ae78faa42896a8911d2736721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if ((($context["type"] ?? $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_7c24fb78cdbb731660db2ea400ee05f8c96a997ae78faa42896a8911d2736721->leave($__internal_7c24fb78cdbb731660db2ea400ee05f8c96a997ae78faa42896a8911d2736721_prof);

        
        $__internal_135cf3fd66e1a2c93e1e2a7e6e911ae13f23e9d94365c759afc33061c04b6f6e->leave($__internal_135cf3fd66e1a2c93e1e2a7e6e911ae13f23e9d94365c759afc33061c04b6f6e_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8e6715d19918b1244bf116706d88a3937f86e977ad96624bb1063b773be4b7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6715d19918b1244bf116706d88a3937f86e977ad96624bb1063b773be4b7ec->enter($__internal_8e6715d19918b1244bf116706d88a3937f86e977ad96624bb1063b773be4b7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1c5578ef7969efd296c69d8f1789a246d1c56dded950aef5a5df637d28d3af2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5578ef7969efd296c69d8f1789a246d1c56dded950aef5a5df637d28d3af2b->enter($__internal_1c5578ef7969efd296c69d8f1789a246d1c56dded950aef5a5df637d28d3af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_1c5578ef7969efd296c69d8f1789a246d1c56dded950aef5a5df637d28d3af2b->leave($__internal_1c5578ef7969efd296c69d8f1789a246d1c56dded950aef5a5df637d28d3af2b_prof);

        
        $__internal_8e6715d19918b1244bf116706d88a3937f86e977ad96624bb1063b773be4b7ec->leave($__internal_8e6715d19918b1244bf116706d88a3937f86e977ad96624bb1063b773be4b7ec_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_50fc14369f4b315bb89373d4cdd5c15b0747a72930e24fdfc5cf8fed01f2abc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fc14369f4b315bb89373d4cdd5c15b0747a72930e24fdfc5cf8fed01f2abc3->enter($__internal_50fc14369f4b315bb89373d4cdd5c15b0747a72930e24fdfc5cf8fed01f2abc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0a7809a8cb924d834da113641f72994cf2a71d1cf6afe9a8959e4469eae5ebb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7809a8cb924d834da113641f72994cf2a71d1cf6afe9a8959e4469eae5ebb8->enter($__internal_0a7809a8cb924d834da113641f72994cf2a71d1cf6afe9a8959e4469eae5ebb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if ((($context["money_pattern"] ?? $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = trim(twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
($context["money_pattern"] ?? $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_0a7809a8cb924d834da113641f72994cf2a71d1cf6afe9a8959e4469eae5ebb8->leave($__internal_0a7809a8cb924d834da113641f72994cf2a71d1cf6afe9a8959e4469eae5ebb8_prof);

        
        $__internal_50fc14369f4b315bb89373d4cdd5c15b0747a72930e24fdfc5cf8fed01f2abc3->leave($__internal_50fc14369f4b315bb89373d4cdd5c15b0747a72930e24fdfc5cf8fed01f2abc3_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_58390c6e3fbef008be082c68c819330671df15ac5d74fdbae9bdef209c68fa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58390c6e3fbef008be082c68c819330671df15ac5d74fdbae9bdef209c68fa3c->enter($__internal_58390c6e3fbef008be082c68c819330671df15ac5d74fdbae9bdef209c68fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a1c58dd2c26101c1cecbde7745c3e9de8e5ebd678cd27e40a6127a539c154f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c58dd2c26101c1cecbde7745c3e9de8e5ebd678cd27e40a6127a539c154f7f->enter($__internal_a1c58dd2c26101c1cecbde7745c3e9de8e5ebd678cd27e40a6127a539c154f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a1c58dd2c26101c1cecbde7745c3e9de8e5ebd678cd27e40a6127a539c154f7f->leave($__internal_a1c58dd2c26101c1cecbde7745c3e9de8e5ebd678cd27e40a6127a539c154f7f_prof);

        
        $__internal_58390c6e3fbef008be082c68c819330671df15ac5d74fdbae9bdef209c68fa3c->leave($__internal_58390c6e3fbef008be082c68c819330671df15ac5d74fdbae9bdef209c68fa3c_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_be6389d703122692b9cc765ba3144291be3ce81ab9f076d88d30c23a08b067b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6389d703122692b9cc765ba3144291be3ce81ab9f076d88d30c23a08b067b0->enter($__internal_be6389d703122692b9cc765ba3144291be3ce81ab9f076d88d30c23a08b067b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_79709fc7c2bd85140ec5906ad4d852c75b2a97183121af5c52e46445f70a6aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79709fc7c2bd85140ec5906ad4d852c75b2a97183121af5c52e46445f70a6aec->enter($__internal_79709fc7c2bd85140ec5906ad4d852c75b2a97183121af5c52e46445f70a6aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_79709fc7c2bd85140ec5906ad4d852c75b2a97183121af5c52e46445f70a6aec->leave($__internal_79709fc7c2bd85140ec5906ad4d852c75b2a97183121af5c52e46445f70a6aec_prof);

        
        $__internal_be6389d703122692b9cc765ba3144291be3ce81ab9f076d88d30c23a08b067b0->leave($__internal_be6389d703122692b9cc765ba3144291be3ce81ab9f076d88d30c23a08b067b0_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_98985949ebfdb570f947fd4d367a685e4236bea6dc24bc1f5ae5039a0bfe6bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98985949ebfdb570f947fd4d367a685e4236bea6dc24bc1f5ae5039a0bfe6bb9->enter($__internal_98985949ebfdb570f947fd4d367a685e4236bea6dc24bc1f5ae5039a0bfe6bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_48f64bb0a718e79c84c0107b8fa063f5901ae91951660fa8e7befb8f13db68fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f64bb0a718e79c84c0107b8fa063f5901ae91951660fa8e7befb8f13db68fe->enter($__internal_48f64bb0a718e79c84c0107b8fa063f5901ae91951660fa8e7befb8f13db68fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_48f64bb0a718e79c84c0107b8fa063f5901ae91951660fa8e7befb8f13db68fe->leave($__internal_48f64bb0a718e79c84c0107b8fa063f5901ae91951660fa8e7befb8f13db68fe_prof);

        
        $__internal_98985949ebfdb570f947fd4d367a685e4236bea6dc24bc1f5ae5039a0bfe6bb9->leave($__internal_98985949ebfdb570f947fd4d367a685e4236bea6dc24bc1f5ae5039a0bfe6bb9_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7804c2972e18c9fa23966656686e9779f09ec14ebb77cf3d78e7a001ce8c79c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7804c2972e18c9fa23966656686e9779f09ec14ebb77cf3d78e7a001ce8c79c9->enter($__internal_7804c2972e18c9fa23966656686e9779f09ec14ebb77cf3d78e7a001ce8c79c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7a6a1633c9b9eade0923e1f5ea0bf8a460b8687318cc7d442e7af516e65261ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6a1633c9b9eade0923e1f5ea0bf8a460b8687318cc7d442e7af516e65261ef->enter($__internal_7a6a1633c9b9eade0923e1f5ea0bf8a460b8687318cc7d442e7af516e65261ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["label_class"] ?? $this->getContext($context, "label_class")))));
            // line 114
            echo "
        ";
            // line 115
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format"))))) {
                    // line 124
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 125
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 126
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 129
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
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
            // line 134
            if ( !$this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 137
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 139
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7a6a1633c9b9eade0923e1f5ea0bf8a460b8687318cc7d442e7af516e65261ef->leave($__internal_7a6a1633c9b9eade0923e1f5ea0bf8a460b8687318cc7d442e7af516e65261ef_prof);

        
        $__internal_7804c2972e18c9fa23966656686e9779f09ec14ebb77cf3d78e7a001ce8c79c9->leave($__internal_7804c2972e18c9fa23966656686e9779f09ec14ebb77cf3d78e7a001ce8c79c9_prof);

    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3c53e04fabc792f323ef85c3480856de0c65fbf146a059fc4d47c08e476c8807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c53e04fabc792f323ef85c3480856de0c65fbf146a059fc4d47c08e476c8807->enter($__internal_3c53e04fabc792f323ef85c3480856de0c65fbf146a059fc4d47c08e476c8807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5292d4af943340d9814650d38b235cd89e7d793b0a0754edd6c586c01a97c721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5292d4af943340d9814650d38b235cd89e7d793b0a0754edd6c586c01a97c721->enter($__internal_5292d4af943340d9814650d38b235cd89e7d793b0a0754edd6c586c01a97c721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5292d4af943340d9814650d38b235cd89e7d793b0a0754edd6c586c01a97c721->leave($__internal_5292d4af943340d9814650d38b235cd89e7d793b0a0754edd6c586c01a97c721_prof);

        
        $__internal_3c53e04fabc792f323ef85c3480856de0c65fbf146a059fc4d47c08e476c8807->leave($__internal_3c53e04fabc792f323ef85c3480856de0c65fbf146a059fc4d47c08e476c8807_prof);

    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_88c6b8f5e44bbfefd7fd7cc3163f545e6b955420efc702845c347e31aa749013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c6b8f5e44bbfefd7fd7cc3163f545e6b955420efc702845c347e31aa749013->enter($__internal_88c6b8f5e44bbfefd7fd7cc3163f545e6b955420efc702845c347e31aa749013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f9e8de426f86e7922748ba224f899a36c94114131b6e046cd93d0db8a2bec811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e8de426f86e7922748ba224f899a36c94114131b6e046cd93d0db8a2bec811->enter($__internal_f9e8de426f86e7922748ba224f899a36c94114131b6e046cd93d0db8a2bec811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f9e8de426f86e7922748ba224f899a36c94114131b6e046cd93d0db8a2bec811->leave($__internal_f9e8de426f86e7922748ba224f899a36c94114131b6e046cd93d0db8a2bec811_prof);

        
        $__internal_88c6b8f5e44bbfefd7fd7cc3163f545e6b955420efc702845c347e31aa749013->leave($__internal_88c6b8f5e44bbfefd7fd7cc3163f545e6b955420efc702845c347e31aa749013_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e0f23dce9a07b1738804c4ec791ca7f891da079a5bb3ef41b3e0af7b6215452d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f23dce9a07b1738804c4ec791ca7f891da079a5bb3ef41b3e0af7b6215452d->enter($__internal_e0f23dce9a07b1738804c4ec791ca7f891da079a5bb3ef41b3e0af7b6215452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_13f91bced91b21da5e25222be5660c591084199227e4598d46c69242a0313775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f91bced91b21da5e25222be5660c591084199227e4598d46c69242a0313775->enter($__internal_13f91bced91b21da5e25222be5660c591084199227e4598d46c69242a0313775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 153
        echo "    ";
        if ($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
            // line 154
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array());
            // line 155
            echo "    ";
        }
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 158
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 159
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 160
                echo "        ";
            }
            // line 161
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 165
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        <label";
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
            echo ">";
            // line 168
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 169
            if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
                // line 170
                echo "<span class=\"control-label__text\">";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 172
                echo "</span>";
            }
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_13f91bced91b21da5e25222be5660c591084199227e4598d46c69242a0313775->leave($__internal_13f91bced91b21da5e25222be5660c591084199227e4598d46c69242a0313775_prof);

        
        $__internal_e0f23dce9a07b1738804c4ec791ca7f891da079a5bb3ef41b3e0af7b6215452d->leave($__internal_e0f23dce9a07b1738804c4ec791ca7f891da079a5bb3ef41b3e0af7b6215452d_prof);

    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c3ea1839b1cf86ff001611b4e0d2cd372d1107f06a3f72c55e58de3d0c2fb5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ea1839b1cf86ff001611b4e0d2cd372d1107f06a3f72c55e58de3d0c2fb5d3->enter($__internal_c3ea1839b1cf86ff001611b4e0d2cd372d1107f06a3f72c55e58de3d0c2fb5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2e4046c6c9cfc80cea044e91c5542632174b79bef04be6918dc634d24a3b1a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4046c6c9cfc80cea044e91c5542632174b79bef04be6918dc634d24a3b1a72->enter($__internal_2e4046c6c9cfc80cea044e91c5542632174b79bef04be6918dc634d24a3b1a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 179
        ob_start();
        // line 180
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 181
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 183
            echo "        <li>
            ";
            // line 184
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 185
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2e4046c6c9cfc80cea044e91c5542632174b79bef04be6918dc634d24a3b1a72->leave($__internal_2e4046c6c9cfc80cea044e91c5542632174b79bef04be6918dc634d24a3b1a72_prof);

        
        $__internal_c3ea1839b1cf86ff001611b4e0d2cd372d1107f06a3f72c55e58de3d0c2fb5d3->leave($__internal_c3ea1839b1cf86ff001611b4e0d2cd372d1107f06a3f72c55e58de3d0c2fb5d3_prof);

    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6a9e83aa7e7fe877717550c1fbd28920ea5223809d76a4d507b08e216299ebb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9e83aa7e7fe877717550c1fbd28920ea5223809d76a4d507b08e216299ebb0->enter($__internal_6a9e83aa7e7fe877717550c1fbd28920ea5223809d76a4d507b08e216299ebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_88e8dd1ae4ee10ede740c71dfcb8ba0a491a6c4d7fc969ae50c62cf255da4c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e8dd1ae4ee10ede740c71dfcb8ba0a491a6c4d7fc969ae50c62cf255da4c8d->enter($__internal_88e8dd1ae4ee10ede740c71dfcb8ba0a491a6c4d7fc969ae50c62cf255da4c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 192
        ob_start();
        // line 193
        echo "    ";
        if (((($context["required"] ?? $this->getContext($context, "required")) && array_key_exists("placeholder", $context)) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder"))))) {
            // line 194
            echo "        ";
            $context["required"] = false;
            // line 195
            echo "    ";
        } elseif ((((((($context["required"] ?? $this->getContext($context, "required")) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) &&  !($context["empty_value_in_choices"] ?? $this->getContext($context, "empty_value_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        }
        // line 198
        echo "
    ";
        // line 199
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 200
        echo "    ";
        if (((array_key_exists("sortable", $context) && ($context["sortable"] ?? $this->getContext($context, "sortable"))) && ($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 201
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 203
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 204
            if ((array_key_exists("empty_value", $context) &&  !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value"))))) {
                // line 205
                echo "                <option value=\"\"";
                if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 206
                if ( !$this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 211
                echo "                </option>
            ";
            } elseif ((            // line 212
array_key_exists("placeholder", $context) &&  !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder"))))) {
                // line 213
                echo "                <option value=\"\"";
                if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 214
                if ( !$this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 215
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 219
                echo "                </option>
            ";
            }
            // line 221
            echo "            ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 222
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
                // line 223
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 224
                if ((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0)) {
                    // line 225
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 227
                echo "            ";
            }
            // line 228
            echo "            ";
            $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
            // line 229
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88e8dd1ae4ee10ede740c71dfcb8ba0a491a6c4d7fc969ae50c62cf255da4c8d->leave($__internal_88e8dd1ae4ee10ede740c71dfcb8ba0a491a6c4d7fc969ae50c62cf255da4c8d_prof);

        
        $__internal_6a9e83aa7e7fe877717550c1fbd28920ea5223809d76a4d507b08e216299ebb0->leave($__internal_6a9e83aa7e7fe877717550c1fbd28920ea5223809d76a4d507b08e216299ebb0_prof);

    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5b7acc802736314bc8ff2c2bd75a734c6e459191ad60986cd20cbddaed98b2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7acc802736314bc8ff2c2bd75a734c6e459191ad60986cd20cbddaed98b2db->enter($__internal_5b7acc802736314bc8ff2c2bd75a734c6e459191ad60986cd20cbddaed98b2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_26218003efac6f6852beb096715c2f6f561e76bc3851a961ab116c7fe216b4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26218003efac6f6852beb096715c2f6f561e76bc3851a961ab116c7fe216b4ce->enter($__internal_26218003efac6f6852beb096715c2f6f561e76bc3851a961ab116c7fe216b4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 236
        ob_start();
        // line 237
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 238
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 240
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? $this->getContext($context, "row")) == true))) {
                // line 241
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 244
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 245
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 246
($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 247
($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 248
($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 249
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_26218003efac6f6852beb096715c2f6f561e76bc3851a961ab116c7fe216b4ce->leave($__internal_26218003efac6f6852beb096715c2f6f561e76bc3851a961ab116c7fe216b4ce_prof);

        
        $__internal_5b7acc802736314bc8ff2c2bd75a734c6e459191ad60986cd20cbddaed98b2db->leave($__internal_5b7acc802736314bc8ff2c2bd75a734c6e459191ad60986cd20cbddaed98b2db_prof);

    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_74b44e966dc10e9ed244c5e8c9dcd7b33e77f1834411db107737b6ab383ed3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b44e966dc10e9ed244c5e8c9dcd7b33e77f1834411db107737b6ab383ed3fc->enter($__internal_74b44e966dc10e9ed244c5e8c9dcd7b33e77f1834411db107737b6ab383ed3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_858968bcb9fbc1a78ed1556685ce3653d50ae74e0e5bff06fc1066d23e14fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858968bcb9fbc1a78ed1556685ce3653d50ae74e0e5bff06fc1066d23e14fe76->enter($__internal_858968bcb9fbc1a78ed1556685ce3653d50ae74e0e5bff06fc1066d23e14fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 256
        ob_start();
        // line 257
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 258
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 260
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? $this->getContext($context, "row")) == true))) {
                // line 261
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 262
                echo "        ";
            }
            // line 263
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 264
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 266
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 268
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                // line 269
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 270
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 273
            echo "            ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 274
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 275
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 278
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_858968bcb9fbc1a78ed1556685ce3653d50ae74e0e5bff06fc1066d23e14fe76->leave($__internal_858968bcb9fbc1a78ed1556685ce3653d50ae74e0e5bff06fc1066d23e14fe76_prof);

        
        $__internal_74b44e966dc10e9ed244c5e8c9dcd7b33e77f1834411db107737b6ab383ed3fc->leave($__internal_74b44e966dc10e9ed244c5e8c9dcd7b33e77f1834411db107737b6ab383ed3fc_prof);

    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d904560c1eb34f506e79918b47f9d31aeb867b55f3814b2f2b9676c9ba1a327a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d904560c1eb34f506e79918b47f9d31aeb867b55f3814b2f2b9676c9ba1a327a->enter($__internal_d904560c1eb34f506e79918b47f9d31aeb867b55f3814b2f2b9676c9ba1a327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_85e9e7fa3ba45bf91c9b7a787468d694537c246c45f3a6ae2f54f07eb981c6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e9e7fa3ba45bf91c9b7a787468d694537c246c45f3a6ae2f54f07eb981c6e5->enter($__internal_85e9e7fa3ba45bf91c9b7a787468d694537c246c45f3a6ae2f54f07eb981c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 284
        ob_start();
        // line 285
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 286
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 288
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 289
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 290
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 291
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "

            ";
            // line 293
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 294
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 295
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 298
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 300
            echo "
            ";
            // line 301
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 302
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 303
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 306
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 308
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_85e9e7fa3ba45bf91c9b7a787468d694537c246c45f3a6ae2f54f07eb981c6e5->leave($__internal_85e9e7fa3ba45bf91c9b7a787468d694537c246c45f3a6ae2f54f07eb981c6e5_prof);

        
        $__internal_d904560c1eb34f506e79918b47f9d31aeb867b55f3814b2f2b9676c9ba1a327a->leave($__internal_d904560c1eb34f506e79918b47f9d31aeb867b55f3814b2f2b9676c9ba1a327a_prof);

    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_39c7d3ba803247a78d7c24d1dc73a1c8b168538a4081cab12c86db6499a77095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c7d3ba803247a78d7c24d1dc73a1c8b168538a4081cab12c86db6499a77095->enter($__internal_39c7d3ba803247a78d7c24d1dc73a1c8b168538a4081cab12c86db6499a77095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1e2360b9f31f50ceb2164d558b197216817b62d9e4f44c34eb0d77750106257b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2360b9f31f50ceb2164d558b197216817b62d9e4f44c34eb0d77750106257b->enter($__internal_1e2360b9f31f50ceb2164d558b197216817b62d9e4f44c34eb0d77750106257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 314
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter(($context["show_label"] ?? $this->getContext($context, "show_label")), true)) : (true));
        // line 315
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 316
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 317
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), ($context["label"] ?? $this->getContext($context, "label")))) : (($context["label"] ?? $this->getContext($context, "label"))));
            // line 318
            echo "        ";
        }
        // line 319
        echo "
        ";
        // line 320
        $context["div_class"] = "sonata-ba-field";
        // line 321
        echo "
        ";
        // line 322
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 323
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 324
            echo "        ";
        }
        // line 325
        echo "
        ";
        // line 326
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 327
            echo "            ";
            // line 328
            echo "            ";
            if (((($context["label"] ?? $this->getContext($context, "label")) === false) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 329
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 330
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 331
                    echo "                ";
                } else {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 333
                    echo "                ";
                }
                // line 334
                echo "            ";
            } else {
                // line 335
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " col-sm-9");
                // line 336
                echo "            ";
            }
            // line 337
            echo "        ";
        }
        // line 338
        echo "
        ";
        // line 339
        if (($context["show_label"] ?? $this->getContext($context, "show_label"))) {
            // line 340
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 342
        echo "
        ";
        // line 343
        if ((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? $this->getContext($context, "sonata_admin_enabled")))) {
            // line 344
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 345
            echo "        ";
        }
        // line 346
        echo "
        ";
        // line 347
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 348
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 349
            echo "        ";
        }
        // line 350
        echo "
        <div class=\"";
        // line 351
        echo twig_escape_filter($this->env, ($context["div_class"] ?? $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 352
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 353
        echo "
            ";
        // line 354
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 355
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 356
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 359
        echo "
            ";
        // line 360
        if (((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 361
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 363
        echo "        </div>
    </div>
";
        
        $__internal_1e2360b9f31f50ceb2164d558b197216817b62d9e4f44c34eb0d77750106257b->leave($__internal_1e2360b9f31f50ceb2164d558b197216817b62d9e4f44c34eb0d77750106257b_prof);

        
        $__internal_39c7d3ba803247a78d7c24d1dc73a1c8b168538a4081cab12c86db6499a77095->leave($__internal_39c7d3ba803247a78d7c24d1dc73a1c8b168538a4081cab12c86db6499a77095_prof);

    }

    // line 367
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4b591769274d7919c6f0d2bd9422fd20f9b9c7de26b6139d9437975ee3dbfbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b591769274d7919c6f0d2bd9422fd20f9b9c7de26b6139d9437975ee3dbfbac->enter($__internal_4b591769274d7919c6f0d2bd9422fd20f9b9c7de26b6139d9437975ee3dbfbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ef730613056da4994716e2ba1c2e2db694e2897f08b21bf4dd3621b14b70af0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef730613056da4994716e2ba1c2e2db694e2897f08b21bf4dd3621b14b70af0d->enter($__internal_ef730613056da4994716e2ba1c2e2db694e2897f08b21bf4dd3621b14b70af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 368
        $context["show_label"] = false;
        // line 369
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ef730613056da4994716e2ba1c2e2db694e2897f08b21bf4dd3621b14b70af0d->leave($__internal_ef730613056da4994716e2ba1c2e2db694e2897f08b21bf4dd3621b14b70af0d_prof);

        
        $__internal_4b591769274d7919c6f0d2bd9422fd20f9b9c7de26b6139d9437975ee3dbfbac->leave($__internal_4b591769274d7919c6f0d2bd9422fd20f9b9c7de26b6139d9437975ee3dbfbac_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_77d0b2e879fdfa652369e9b2482c97f67d529b5e95c8fdfd566a60ac82f7873c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d0b2e879fdfa652369e9b2482c97f67d529b5e95c8fdfd566a60ac82f7873c->enter($__internal_77d0b2e879fdfa652369e9b2482c97f67d529b5e95c8fdfd566a60ac82f7873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fa7dfb37e66a73ad0b73135ac83e1adfe7b9a1f844e358bd55fb057e84cc3f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7dfb37e66a73ad0b73135ac83e1adfe7b9a1f844e358bd55fb057e84cc3f5f->enter($__internal_fa7dfb37e66a73ad0b73135ac83e1adfe7b9a1f844e358bd55fb057e84cc3f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        $context["show_label"] = false;
        // line 374
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fa7dfb37e66a73ad0b73135ac83e1adfe7b9a1f844e358bd55fb057e84cc3f5f->leave($__internal_fa7dfb37e66a73ad0b73135ac83e1adfe7b9a1f844e358bd55fb057e84cc3f5f_prof);

        
        $__internal_77d0b2e879fdfa652369e9b2482c97f67d529b5e95c8fdfd566a60ac82f7873c->leave($__internal_77d0b2e879fdfa652369e9b2482c97f67d529b5e95c8fdfd566a60ac82f7873c_prof);

    }

    // line 377
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_c87424474d3d641f8700d8d63390d6f4ec381e1f45e92dd8ace57fdf06c24580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87424474d3d641f8700d8d63390d6f4ec381e1f45e92dd8ace57fdf06c24580->enter($__internal_c87424474d3d641f8700d8d63390d6f4ec381e1f45e92dd8ace57fdf06c24580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_1ee550a41410587883468348e7f274295b5d55cc700b035ce4970d49a5c14dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee550a41410587883468348e7f274295b5d55cc700b035ce4970d49a5c14dc4->enter($__internal_1ee550a41410587883468348e7f274295b5d55cc700b035ce4970d49a5c14dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 378
        ob_start();
        // line 379
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 380
        if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
            // line 381
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 389
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 390
        if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
            // line 391
            echo "                </div>
            </div>
        ";
        }
        // line 394
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1ee550a41410587883468348e7f274295b5d55cc700b035ce4970d49a5c14dc4->leave($__internal_1ee550a41410587883468348e7f274295b5d55cc700b035ce4970d49a5c14dc4_prof);

        
        $__internal_c87424474d3d641f8700d8d63390d6f4ec381e1f45e92dd8ace57fdf06c24580->leave($__internal_c87424474d3d641f8700d8d63390d6f4ec381e1f45e92dd8ace57fdf06c24580_prof);

    }

    // line 398
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_96f4713f41a6690431bd6bbc6abbc5224190c84563566e6ccce51f72197f0586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f4713f41a6690431bd6bbc6abbc5224190c84563566e6ccce51f72197f0586->enter($__internal_96f4713f41a6690431bd6bbc6abbc5224190c84563566e6ccce51f72197f0586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_1b6c8445af77b3b93558bcb8ca6771ecb480f9b5e32d7e0f78a9789c29718b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6c8445af77b3b93558bcb8ca6771ecb480f9b5e32d7e0f78a9789c29718b78->enter($__internal_1b6c8445af77b3b93558bcb8ca6771ecb480f9b5e32d7e0f78a9789c29718b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 399
        ob_start();
        // line 400
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 401
            echo "        ";
            $context["child"] = ($context["prototype"] ?? $this->getContext($context, "prototype"));
            // line 402
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? $this->getContext($context, "allow_delete"));
            // line 403
            echo "        ";
            $context["allow_delete"] = true;
            // line 404
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 405
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? $this->getContext($context, "allow_delete_backup"));
            // line 406
            echo "    ";
        }
        // line 407
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 410
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 413
        if (($context["allow_add"] ?? $this->getContext($context, "allow_add"))) {
            // line 414
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 416
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1b6c8445af77b3b93558bcb8ca6771ecb480f9b5e32d7e0f78a9789c29718b78->leave($__internal_1b6c8445af77b3b93558bcb8ca6771ecb480f9b5e32d7e0f78a9789c29718b78_prof);

        
        $__internal_96f4713f41a6690431bd6bbc6abbc5224190c84563566e6ccce51f72197f0586->leave($__internal_96f4713f41a6690431bd6bbc6abbc5224190c84563566e6ccce51f72197f0586_prof);

    }

    // line 420
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_a0d3d9be829145fb067eab33533a3c040360aef5417f819cee6ce3b91dd1389b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d3d9be829145fb067eab33533a3c040360aef5417f819cee6ce3b91dd1389b->enter($__internal_a0d3d9be829145fb067eab33533a3c040360aef5417f819cee6ce3b91dd1389b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_18ab0db846d2a483b9762f390b847bf09163b7e69605630c8a2326e0eaa4e8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ab0db846d2a483b9762f390b847bf09163b7e69605630c8a2326e0eaa4e8a4->enter($__internal_18ab0db846d2a483b9762f390b847bf09163b7e69605630c8a2326e0eaa4e8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 421
        echo "    ";
        ob_start();
        // line 422
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 423
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 426
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "
            ";
        // line 429
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_18ab0db846d2a483b9762f390b847bf09163b7e69605630c8a2326e0eaa4e8a4->leave($__internal_18ab0db846d2a483b9762f390b847bf09163b7e69605630c8a2326e0eaa4e8a4_prof);

        
        $__internal_a0d3d9be829145fb067eab33533a3c040360aef5417f819cee6ce3b91dd1389b->leave($__internal_a0d3d9be829145fb067eab33533a3c040360aef5417f819cee6ce3b91dd1389b_prof);

    }

    // line 434
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_35f2650b787254a36a781b699a1f3afe4d6e764daa793204be2d7cf1eb8a8ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f2650b787254a36a781b699a1f3afe4d6e764daa793204be2d7cf1eb8a8ebf->enter($__internal_35f2650b787254a36a781b699a1f3afe4d6e764daa793204be2d7cf1eb8a8ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_7bf0adca61c912fdd12e3ede2d2cdb5b28de27a1b729c0d43932a42c699e0739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf0adca61c912fdd12e3ede2d2cdb5b28de27a1b729c0d43932a42c699e0739->enter($__internal_7bf0adca61c912fdd12e3ede2d2cdb5b28de27a1b729c0d43932a42c699e0739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 435
        echo "    ";
        ob_start();
        // line 436
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 438
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 440
        $context["div_class"] = "";
        // line 441
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 442
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 443
            echo "            ";
        }
        // line 444
        echo "
            <div class=\"";
        // line 445
        echo twig_escape_filter($this->env, ($context["div_class"] ?? $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 446
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 447
        echo "            </div>

            ";
        // line 449
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 450
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 451
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 454
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7bf0adca61c912fdd12e3ede2d2cdb5b28de27a1b729c0d43932a42c699e0739->leave($__internal_7bf0adca61c912fdd12e3ede2d2cdb5b28de27a1b729c0d43932a42c699e0739_prof);

        
        $__internal_35f2650b787254a36a781b699a1f3afe4d6e764daa793204be2d7cf1eb8a8ebf->leave($__internal_35f2650b787254a36a781b699a1f3afe4d6e764daa793204be2d7cf1eb8a8ebf_prof);

    }

    // line 458
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_eadaed570edc7f66684f24b416d2300a6551db0caa17f568b137bdf7b48b9f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadaed570edc7f66684f24b416d2300a6551db0caa17f568b137bdf7b48b9f41->enter($__internal_eadaed570edc7f66684f24b416d2300a6551db0caa17f568b137bdf7b48b9f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_4e245162bd295ea6bd58efd2bc1cf8f2491cef6ca17c715875e922359fc89672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e245162bd295ea6bd58efd2bc1cf8f2491cef6ca17c715875e922359fc89672->enter($__internal_4e245162bd295ea6bd58efd2bc1cf8f2491cef6ca17c715875e922359fc89672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 459
        echo "    ";
        $this->loadTemplate(($context["template"] ?? $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 459)->display($context);
        
        $__internal_4e245162bd295ea6bd58efd2bc1cf8f2491cef6ca17c715875e922359fc89672->leave($__internal_4e245162bd295ea6bd58efd2bc1cf8f2491cef6ca17c715875e922359fc89672_prof);

        
        $__internal_eadaed570edc7f66684f24b416d2300a6551db0caa17f568b137bdf7b48b9f41->leave($__internal_eadaed570edc7f66684f24b416d2300a6551db0caa17f568b137bdf7b48b9f41_prof);

    }

    // line 462
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_3fb79faae781bde2bbdb7abb75c2399716b508d504622aeea51c4aa88c1f547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb79faae781bde2bbdb7abb75c2399716b508d504622aeea51c4aa88c1f547f->enter($__internal_3fb79faae781bde2bbdb7abb75c2399716b508d504622aeea51c4aa88c1f547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_892dac23597e69c8c93f40390ce91ea59cce36b290da74f1e5b21fb944ed088b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892dac23597e69c8c93f40390ce91ea59cce36b290da74f1e5b21fb944ed088b->enter($__internal_892dac23597e69c8c93f40390ce91ea59cce36b290da74f1e5b21fb944ed088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 463
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 464
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? $this->getContext($context, "id")), 0, (twig_length_filter($this->env, ($context["id"] ?? $this->getContext($context, "id"))) - twig_length_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")))));
        // line 465
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 467
        echo twig_jsonencode_filter(($context["all_fields"] ?? $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 468
        echo twig_jsonencode_filter(($context["map"] ?? $this->getContext($context, "map")));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 470
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 479
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_892dac23597e69c8c93f40390ce91ea59cce36b290da74f1e5b21fb944ed088b->leave($__internal_892dac23597e69c8c93f40390ce91ea59cce36b290da74f1e5b21fb944ed088b_prof);

        
        $__internal_3fb79faae781bde2bbdb7abb75c2399716b508d504622aeea51c4aa88c1f547f->leave($__internal_3fb79faae781bde2bbdb7abb75c2399716b508d504622aeea51c4aa88c1f547f_prof);

    }

    // line 502
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_2b1098ee4b933d7663c6dde246678660c8f956de5f47cef0bd33700114371a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1098ee4b933d7663c6dde246678660c8f956de5f47cef0bd33700114371a69->enter($__internal_2b1098ee4b933d7663c6dde246678660c8f956de5f47cef0bd33700114371a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_54f6104a44620090bf2ef9a1481f9cbae262694bbbe5a4bb72554e3c6394f090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f6104a44620090bf2ef9a1481f9cbae262694bbbe5a4bb72554e3c6394f090->enter($__internal_54f6104a44620090bf2ef9a1481f9cbae262694bbbe5a4bb72554e3c6394f090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 503
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 507
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_54f6104a44620090bf2ef9a1481f9cbae262694bbbe5a4bb72554e3c6394f090->leave($__internal_54f6104a44620090bf2ef9a1481f9cbae262694bbbe5a4bb72554e3c6394f090_prof);

        
        $__internal_2b1098ee4b933d7663c6dde246678660c8f956de5f47cef0bd33700114371a69->leave($__internal_2b1098ee4b933d7663c6dde246678660c8f956de5f47cef0bd33700114371a69_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1648 => 507,  1636 => 503,  1627 => 502,  1595 => 479,  1582 => 470,  1577 => 468,  1573 => 467,  1569 => 465,  1567 => 464,  1562 => 463,  1553 => 462,  1542 => 459,  1533 => 458,  1521 => 454,  1515 => 451,  1512 => 450,  1510 => 449,  1506 => 447,  1503 => 446,  1491 => 445,  1488 => 444,  1485 => 443,  1482 => 442,  1479 => 441,  1477 => 440,  1472 => 438,  1460 => 436,  1457 => 435,  1448 => 434,  1434 => 429,  1431 => 428,  1414 => 426,  1397 => 425,  1392 => 423,  1387 => 422,  1384 => 421,  1375 => 420,  1363 => 416,  1359 => 414,  1357 => 413,  1352 => 412,  1335 => 410,  1318 => 409,  1314 => 408,  1309 => 407,  1306 => 406,  1303 => 405,  1300 => 404,  1297 => 403,  1294 => 402,  1291 => 401,  1288 => 400,  1286 => 399,  1277 => 398,  1265 => 394,  1260 => 391,  1258 => 390,  1253 => 389,  1243 => 381,  1241 => 380,  1238 => 379,  1236 => 378,  1227 => 377,  1216 => 374,  1214 => 373,  1205 => 372,  1194 => 369,  1192 => 368,  1183 => 367,  1171 => 363,  1165 => 361,  1163 => 360,  1160 => 359,  1154 => 356,  1151 => 355,  1149 => 354,  1146 => 353,  1143 => 352,  1139 => 351,  1136 => 350,  1133 => 349,  1130 => 348,  1128 => 347,  1125 => 346,  1122 => 345,  1119 => 344,  1117 => 343,  1114 => 342,  1108 => 340,  1106 => 339,  1103 => 338,  1100 => 337,  1097 => 336,  1094 => 335,  1091 => 334,  1088 => 333,  1085 => 332,  1082 => 331,  1079 => 330,  1076 => 329,  1073 => 328,  1071 => 327,  1069 => 326,  1066 => 325,  1063 => 324,  1060 => 323,  1058 => 322,  1055 => 321,  1053 => 320,  1050 => 319,  1047 => 318,  1044 => 317,  1042 => 316,  1033 => 315,  1030 => 314,  1021 => 313,  1008 => 308,  1002 => 306,  996 => 303,  993 => 302,  991 => 301,  988 => 300,  982 => 298,  976 => 295,  973 => 294,  971 => 293,  966 => 291,  962 => 290,  957 => 289,  954 => 288,  948 => 286,  945 => 285,  943 => 284,  934 => 283,  921 => 278,  915 => 275,  910 => 274,  907 => 273,  901 => 270,  896 => 269,  894 => 268,  889 => 266,  885 => 265,  880 => 264,  877 => 263,  874 => 262,  871 => 261,  868 => 260,  862 => 258,  859 => 257,  857 => 256,  848 => 255,  834 => 249,  832 => 248,  831 => 247,  830 => 246,  829 => 245,  824 => 244,  821 => 243,  818 => 242,  815 => 241,  812 => 240,  806 => 238,  803 => 237,  801 => 236,  792 => 235,  776 => 229,  773 => 228,  770 => 227,  764 => 225,  762 => 224,  757 => 223,  754 => 222,  751 => 221,  747 => 219,  744 => 217,  741 => 215,  739 => 214,  732 => 213,  730 => 212,  727 => 211,  724 => 209,  721 => 207,  719 => 206,  712 => 205,  710 => 204,  702 => 203,  696 => 201,  693 => 200,  691 => 199,  688 => 198,  685 => 197,  682 => 196,  679 => 195,  676 => 194,  673 => 193,  671 => 192,  662 => 191,  650 => 187,  643 => 185,  640 => 184,  637 => 183,  633 => 182,  628 => 181,  625 => 180,  623 => 179,  614 => 178,  602 => 174,  599 => 172,  597 => 171,  595 => 170,  593 => 169,  591 => 168,  576 => 167,  573 => 166,  570 => 165,  567 => 164,  564 => 163,  561 => 162,  558 => 161,  555 => 160,  552 => 159,  549 => 158,  546 => 157,  544 => 156,  541 => 155,  538 => 154,  535 => 153,  526 => 152,  516 => 149,  507 => 148,  497 => 145,  488 => 144,  475 => 139,  469 => 137,  466 => 135,  464 => 134,  449 => 133,  446 => 132,  442 => 129,  439 => 126,  438 => 125,  437 => 124,  435 => 123,  433 => 122,  430 => 121,  427 => 120,  424 => 119,  421 => 118,  418 => 117,  415 => 116,  413 => 115,  410 => 114,  407 => 113,  405 => 112,  402 => 111,  400 => 110,  397 => 109,  394 => 108,  391 => 107,  388 => 106,  386 => 105,  377 => 104,  366 => 99,  364 => 98,  362 => 97,  359 => 95,  357 => 94,  355 => 93,  346 => 92,  335 => 88,  333 => 87,  331 => 86,  328 => 84,  326 => 83,  324 => 82,  315 => 81,  300 => 75,  297 => 74,  294 => 73,  291 => 72,  282 => 71,  271 => 68,  267 => 66,  265 => 65,  262 => 64,  259 => 63,  257 => 62,  251 => 60,  249 => 59,  247 => 58,  244 => 57,  241 => 56,  238 => 54,  236 => 53,  227 => 52,  214 => 49,  211 => 48,  202 => 47,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  177 => 40,  168 => 39,  158 => 36,  154 => 35,  145 => 34,  130 => 29,  128 => 28,  126 => 27,  117 => 26,  106 => 23,  102 => 22,  99 => 21,  90 => 19,  86 => 18,  83 => 17,  78 => 16,  76 => 15,  67 => 14,  11 => 12,);
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

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block sonata_help %}
{% spaceless %}
{% if sonata_help is defined and sonata_help %}
    <span class=\"help-block sonata-ba-field-widget-help\">{{ sonata_help|raw }}</span>
{% endif %}
{% endspaceless %}
{% endblock %}

{% block form_widget -%}
    {{ parent() }}
    {{ block('sonata_help') }}
{%- endblock form_widget %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {% if not sonata_admin.admin %}
                {{- label|trans({}, translation_domain) -}}
            {% else %}
                {{ label|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain) }}
            {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {{- label|trans({}, translation_domain) -}}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} >
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- empty_value|trans({}, translation_domain) -}}
                    {% else %}
                        {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- placeholder|trans({}, translation_domain) -}}
                    {% else %}
                        {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label|default(true) %}
    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}\">
        {% if sonata_admin.field_description.options is defined %}
            {% set label = sonata_admin.field_description.options.name|default(label)  %}
        {% endif %}

        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}
                <span class=\"help-block sonata-ba-field-help\">{{ sonata_admin.field_description.help|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0%} error{%endif%}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif%}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {% set main_form_name = id|slice(0, id|length - name|length) %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }};
            var map = {{ map|json_encode|raw }};

            var showMaskChoiceEl = jQuery('#{{ main_form_name }}{{ name }}');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-{{ main_form_name }}' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
{% endblock %}

{%  block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});
        });
    </script>
{% endblock %}
", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
