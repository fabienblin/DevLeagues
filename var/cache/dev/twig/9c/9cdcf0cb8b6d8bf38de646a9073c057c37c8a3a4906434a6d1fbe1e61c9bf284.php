<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_a8481ce8b1511dd52d016d00fe4ebc99289781cbca8a9f75cae1e84fd0354de8 extends Twig_Template
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
        $__internal_35e2764f9001155172b5ca1afab034aa92c51b97935b871a5d30583b03cc39ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e2764f9001155172b5ca1afab034aa92c51b97935b871a5d30583b03cc39ff->enter($__internal_35e2764f9001155172b5ca1afab034aa92c51b97935b871a5d30583b03cc39ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_8ca42769eb11ef64ad38011bd7c10989918aa5ff035439d9c70ac684abcbbaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca42769eb11ef64ad38011bd7c10989918aa5ff035439d9c70ac684abcbbaca->enter($__internal_8ca42769eb11ef64ad38011bd7c10989918aa5ff035439d9c70ac684abcbbaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e2764f9001155172b5ca1afab034aa92c51b97935b871a5d30583b03cc39ff->leave($__internal_35e2764f9001155172b5ca1afab034aa92c51b97935b871a5d30583b03cc39ff_prof);

        
        $__internal_8ca42769eb11ef64ad38011bd7c10989918aa5ff035439d9c70ac684abcbbaca->leave($__internal_8ca42769eb11ef64ad38011bd7c10989918aa5ff035439d9c70ac684abcbbaca_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3a9c3515c0e14654c203503b35e223a8bcb14c1e5225e7831a7403d045d7f5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9c3515c0e14654c203503b35e223a8bcb14c1e5225e7831a7403d045d7f5f3->enter($__internal_3a9c3515c0e14654c203503b35e223a8bcb14c1e5225e7831a7403d045d7f5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a32f25a17c43c976cc4a82d84268b50535c69b4419c8989335ab3cdac981f820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32f25a17c43c976cc4a82d84268b50535c69b4419c8989335ab3cdac981f820->enter($__internal_a32f25a17c43c976cc4a82d84268b50535c69b4419c8989335ab3cdac981f820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_a32f25a17c43c976cc4a82d84268b50535c69b4419c8989335ab3cdac981f820->leave($__internal_a32f25a17c43c976cc4a82d84268b50535c69b4419c8989335ab3cdac981f820_prof);

        
        $__internal_3a9c3515c0e14654c203503b35e223a8bcb14c1e5225e7831a7403d045d7f5f3->leave($__internal_3a9c3515c0e14654c203503b35e223a8bcb14c1e5225e7831a7403d045d7f5f3_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_a2cd199ddf6c2ae08445fd1d09f49f45992efe5d1d4d53821c6fb9b7eb8104d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cd199ddf6c2ae08445fd1d09f49f45992efe5d1d4d53821c6fb9b7eb8104d9->enter($__internal_a2cd199ddf6c2ae08445fd1d09f49f45992efe5d1d4d53821c6fb9b7eb8104d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        $__internal_96e0f16924d15b4a3640a061b4b466dd10cd13fc859f6fdeb2ee08b2112b4982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e0f16924d15b4a3640a061b4b466dd10cd13fc859f6fdeb2ee08b2112b4982->enter($__internal_96e0f16924d15b4a3640a061b4b466dd10cd13fc859f6fdeb2ee08b2112b4982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

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
        
        $__internal_96e0f16924d15b4a3640a061b4b466dd10cd13fc859f6fdeb2ee08b2112b4982->leave($__internal_96e0f16924d15b4a3640a061b4b466dd10cd13fc859f6fdeb2ee08b2112b4982_prof);

        
        $__internal_a2cd199ddf6c2ae08445fd1d09f49f45992efe5d1d4d53821c6fb9b7eb8104d9->leave($__internal_a2cd199ddf6c2ae08445fd1d09f49f45992efe5d1d4d53821c6fb9b7eb8104d9_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d0b3c150dd192ba9f61c0c7a7691ce1a629b476018d34d60e09c730487a9757a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b3c150dd192ba9f61c0c7a7691ce1a629b476018d34d60e09c730487a9757a->enter($__internal_d0b3c150dd192ba9f61c0c7a7691ce1a629b476018d34d60e09c730487a9757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_2a0b6c15e9d3db85d0f02cc4dd5b7e3999dd02c5a2bb55278ecd0eb7d2794ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0b6c15e9d3db85d0f02cc4dd5b7e3999dd02c5a2bb55278ecd0eb7d2794ad1->enter($__internal_2a0b6c15e9d3db85d0f02cc4dd5b7e3999dd02c5a2bb55278ecd0eb7d2794ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_2a0b6c15e9d3db85d0f02cc4dd5b7e3999dd02c5a2bb55278ecd0eb7d2794ad1->leave($__internal_2a0b6c15e9d3db85d0f02cc4dd5b7e3999dd02c5a2bb55278ecd0eb7d2794ad1_prof);

        
        $__internal_d0b3c150dd192ba9f61c0c7a7691ce1a629b476018d34d60e09c730487a9757a->leave($__internal_d0b3c150dd192ba9f61c0c7a7691ce1a629b476018d34d60e09c730487a9757a_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1aa7f9b501bdd638e0aa93403b83b6191070c39407e19a97514e91378bce3d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa7f9b501bdd638e0aa93403b83b6191070c39407e19a97514e91378bce3d7b->enter($__internal_1aa7f9b501bdd638e0aa93403b83b6191070c39407e19a97514e91378bce3d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a8986c0cce87aefd3a443d7f4c7267cba8581b16caa2b2998e19b3811f4634c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8986c0cce87aefd3a443d7f4c7267cba8581b16caa2b2998e19b3811f4634c0->enter($__internal_a8986c0cce87aefd3a443d7f4c7267cba8581b16caa2b2998e19b3811f4634c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_a8986c0cce87aefd3a443d7f4c7267cba8581b16caa2b2998e19b3811f4634c0->leave($__internal_a8986c0cce87aefd3a443d7f4c7267cba8581b16caa2b2998e19b3811f4634c0_prof);

        
        $__internal_1aa7f9b501bdd638e0aa93403b83b6191070c39407e19a97514e91378bce3d7b->leave($__internal_1aa7f9b501bdd638e0aa93403b83b6191070c39407e19a97514e91378bce3d7b_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2a093664b9c8bb057df6a32fb2e0ff16c72b59403f95e34cf88c794b0ee5a272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a093664b9c8bb057df6a32fb2e0ff16c72b59403f95e34cf88c794b0ee5a272->enter($__internal_2a093664b9c8bb057df6a32fb2e0ff16c72b59403f95e34cf88c794b0ee5a272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f6211a27bd6428739d3dcdc3cc04b1ee7b32c8d03798d3d3add1f86158007f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6211a27bd6428739d3dcdc3cc04b1ee7b32c8d03798d3d3add1f86158007f8->enter($__internal_6f6211a27bd6428739d3dcdc3cc04b1ee7b32c8d03798d3d3add1f86158007f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f6211a27bd6428739d3dcdc3cc04b1ee7b32c8d03798d3d3add1f86158007f8->leave($__internal_6f6211a27bd6428739d3dcdc3cc04b1ee7b32c8d03798d3d3add1f86158007f8_prof);

        
        $__internal_2a093664b9c8bb057df6a32fb2e0ff16c72b59403f95e34cf88c794b0ee5a272->leave($__internal_2a093664b9c8bb057df6a32fb2e0ff16c72b59403f95e34cf88c794b0ee5a272_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2e0bf98f3cbf67d662a1d3e91572c3c31622b17b0b155d248cb9935c95ddfeab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0bf98f3cbf67d662a1d3e91572c3c31622b17b0b155d248cb9935c95ddfeab->enter($__internal_2e0bf98f3cbf67d662a1d3e91572c3c31622b17b0b155d248cb9935c95ddfeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_108f094182144114a7e58447b8d7f12b311961d2cbeec12b5b48f3818603275c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108f094182144114a7e58447b8d7f12b311961d2cbeec12b5b48f3818603275c->enter($__internal_108f094182144114a7e58447b8d7f12b311961d2cbeec12b5b48f3818603275c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_108f094182144114a7e58447b8d7f12b311961d2cbeec12b5b48f3818603275c->leave($__internal_108f094182144114a7e58447b8d7f12b311961d2cbeec12b5b48f3818603275c_prof);

        
        $__internal_2e0bf98f3cbf67d662a1d3e91572c3c31622b17b0b155d248cb9935c95ddfeab->leave($__internal_2e0bf98f3cbf67d662a1d3e91572c3c31622b17b0b155d248cb9935c95ddfeab_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3c39f3e33a56f4f1a3aa38ff02651c9bbe3d4966db687712077bc4f38aa844f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c39f3e33a56f4f1a3aa38ff02651c9bbe3d4966db687712077bc4f38aa844f2->enter($__internal_3c39f3e33a56f4f1a3aa38ff02651c9bbe3d4966db687712077bc4f38aa844f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_601f98ed7deae453134a6d0f9f54031c5854cc233daf7f36f921fd90ccd12585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601f98ed7deae453134a6d0f9f54031c5854cc233daf7f36f921fd90ccd12585->enter($__internal_601f98ed7deae453134a6d0f9f54031c5854cc233daf7f36f921fd90ccd12585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_601f98ed7deae453134a6d0f9f54031c5854cc233daf7f36f921fd90ccd12585->leave($__internal_601f98ed7deae453134a6d0f9f54031c5854cc233daf7f36f921fd90ccd12585_prof);

        
        $__internal_3c39f3e33a56f4f1a3aa38ff02651c9bbe3d4966db687712077bc4f38aa844f2->leave($__internal_3c39f3e33a56f4f1a3aa38ff02651c9bbe3d4966db687712077bc4f38aa844f2_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c6a17cd3f8b6d47d949a74fa3b04b3d63a9e8303947d2577baa24b06256d589f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a17cd3f8b6d47d949a74fa3b04b3d63a9e8303947d2577baa24b06256d589f->enter($__internal_c6a17cd3f8b6d47d949a74fa3b04b3d63a9e8303947d2577baa24b06256d589f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_825999f3e2a140f4c00b8d6a3a332f14615eae10f95883670a360d3b1a07d409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825999f3e2a140f4c00b8d6a3a332f14615eae10f95883670a360d3b1a07d409->enter($__internal_825999f3e2a140f4c00b8d6a3a332f14615eae10f95883670a360d3b1a07d409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_825999f3e2a140f4c00b8d6a3a332f14615eae10f95883670a360d3b1a07d409->leave($__internal_825999f3e2a140f4c00b8d6a3a332f14615eae10f95883670a360d3b1a07d409_prof);

        
        $__internal_c6a17cd3f8b6d47d949a74fa3b04b3d63a9e8303947d2577baa24b06256d589f->leave($__internal_c6a17cd3f8b6d47d949a74fa3b04b3d63a9e8303947d2577baa24b06256d589f_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2275bc363caecb1ce9b61d67ba742de271f44c87c2b29f459c144450e4072567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2275bc363caecb1ce9b61d67ba742de271f44c87c2b29f459c144450e4072567->enter($__internal_2275bc363caecb1ce9b61d67ba742de271f44c87c2b29f459c144450e4072567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4b83ccf37ee5fd14c7fe31b1710a739bf8cd78a86ad1f3f222299e1771e6bb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b83ccf37ee5fd14c7fe31b1710a739bf8cd78a86ad1f3f222299e1771e6bb9d->enter($__internal_4b83ccf37ee5fd14c7fe31b1710a739bf8cd78a86ad1f3f222299e1771e6bb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_4b83ccf37ee5fd14c7fe31b1710a739bf8cd78a86ad1f3f222299e1771e6bb9d->leave($__internal_4b83ccf37ee5fd14c7fe31b1710a739bf8cd78a86ad1f3f222299e1771e6bb9d_prof);

        
        $__internal_2275bc363caecb1ce9b61d67ba742de271f44c87c2b29f459c144450e4072567->leave($__internal_2275bc363caecb1ce9b61d67ba742de271f44c87c2b29f459c144450e4072567_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ed659dcd530a50e353d7e0fe5cd3255f338d94e9f7e2256a0ae35bfd8bba1d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed659dcd530a50e353d7e0fe5cd3255f338d94e9f7e2256a0ae35bfd8bba1d8d->enter($__internal_ed659dcd530a50e353d7e0fe5cd3255f338d94e9f7e2256a0ae35bfd8bba1d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bcdf9b579338f7daa009a49becf826808ca34e1d8724210102c8d1e76991ea24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdf9b579338f7daa009a49becf826808ca34e1d8724210102c8d1e76991ea24->enter($__internal_bcdf9b579338f7daa009a49becf826808ca34e1d8724210102c8d1e76991ea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_bcdf9b579338f7daa009a49becf826808ca34e1d8724210102c8d1e76991ea24->leave($__internal_bcdf9b579338f7daa009a49becf826808ca34e1d8724210102c8d1e76991ea24_prof);

        
        $__internal_ed659dcd530a50e353d7e0fe5cd3255f338d94e9f7e2256a0ae35bfd8bba1d8d->leave($__internal_ed659dcd530a50e353d7e0fe5cd3255f338d94e9f7e2256a0ae35bfd8bba1d8d_prof);

    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4d7ac061214ac5cad49beaa64ace23577f472856e88c65a0cbb1b500de22a5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7ac061214ac5cad49beaa64ace23577f472856e88c65a0cbb1b500de22a5a6->enter($__internal_4d7ac061214ac5cad49beaa64ace23577f472856e88c65a0cbb1b500de22a5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e4be8f2fe6ac5a7024607d0ce58d25f1ea4230e8e0dcaef8ec693cead815ae1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4be8f2fe6ac5a7024607d0ce58d25f1ea4230e8e0dcaef8ec693cead815ae1d->enter($__internal_e4be8f2fe6ac5a7024607d0ce58d25f1ea4230e8e0dcaef8ec693cead815ae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e4be8f2fe6ac5a7024607d0ce58d25f1ea4230e8e0dcaef8ec693cead815ae1d->leave($__internal_e4be8f2fe6ac5a7024607d0ce58d25f1ea4230e8e0dcaef8ec693cead815ae1d_prof);

        
        $__internal_4d7ac061214ac5cad49beaa64ace23577f472856e88c65a0cbb1b500de22a5a6->leave($__internal_4d7ac061214ac5cad49beaa64ace23577f472856e88c65a0cbb1b500de22a5a6_prof);

    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_97b81f51fbc14a6a80394df9f542191981c4bb4fa3fd44343fa825f69d16a5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b81f51fbc14a6a80394df9f542191981c4bb4fa3fd44343fa825f69d16a5fa->enter($__internal_97b81f51fbc14a6a80394df9f542191981c4bb4fa3fd44343fa825f69d16a5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d1db41a34ebc867b85162747439283062af5304ad66498635b55523c6deb80e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db41a34ebc867b85162747439283062af5304ad66498635b55523c6deb80e0->enter($__internal_d1db41a34ebc867b85162747439283062af5304ad66498635b55523c6deb80e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d1db41a34ebc867b85162747439283062af5304ad66498635b55523c6deb80e0->leave($__internal_d1db41a34ebc867b85162747439283062af5304ad66498635b55523c6deb80e0_prof);

        
        $__internal_97b81f51fbc14a6a80394df9f542191981c4bb4fa3fd44343fa825f69d16a5fa->leave($__internal_97b81f51fbc14a6a80394df9f542191981c4bb4fa3fd44343fa825f69d16a5fa_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_72a6e267167b2de4bfe9148da51b4ff186887d9ece8099feaba71584c1a33e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a6e267167b2de4bfe9148da51b4ff186887d9ece8099feaba71584c1a33e13->enter($__internal_72a6e267167b2de4bfe9148da51b4ff186887d9ece8099feaba71584c1a33e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f87acf8e5974c2b22983f24674ab1f165ee5f5d10f888234fe5f88ff48f5233c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87acf8e5974c2b22983f24674ab1f165ee5f5d10f888234fe5f88ff48f5233c->enter($__internal_f87acf8e5974c2b22983f24674ab1f165ee5f5d10f888234fe5f88ff48f5233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f87acf8e5974c2b22983f24674ab1f165ee5f5d10f888234fe5f88ff48f5233c->leave($__internal_f87acf8e5974c2b22983f24674ab1f165ee5f5d10f888234fe5f88ff48f5233c_prof);

        
        $__internal_72a6e267167b2de4bfe9148da51b4ff186887d9ece8099feaba71584c1a33e13->leave($__internal_72a6e267167b2de4bfe9148da51b4ff186887d9ece8099feaba71584c1a33e13_prof);

    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_45f6ee52d3346c47b4f0b9e9092a8811bb3905b218b1671fe34420b4e0a4e1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f6ee52d3346c47b4f0b9e9092a8811bb3905b218b1671fe34420b4e0a4e1e1->enter($__internal_45f6ee52d3346c47b4f0b9e9092a8811bb3905b218b1671fe34420b4e0a4e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2171fcc83eb49a257fdf5b73b922a1d7f3a8afd194633cfc19316b5a73c9b07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2171fcc83eb49a257fdf5b73b922a1d7f3a8afd194633cfc19316b5a73c9b07e->enter($__internal_2171fcc83eb49a257fdf5b73b922a1d7f3a8afd194633cfc19316b5a73c9b07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_2171fcc83eb49a257fdf5b73b922a1d7f3a8afd194633cfc19316b5a73c9b07e->leave($__internal_2171fcc83eb49a257fdf5b73b922a1d7f3a8afd194633cfc19316b5a73c9b07e_prof);

        
        $__internal_45f6ee52d3346c47b4f0b9e9092a8811bb3905b218b1671fe34420b4e0a4e1e1->leave($__internal_45f6ee52d3346c47b4f0b9e9092a8811bb3905b218b1671fe34420b4e0a4e1e1_prof);

    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2c5858cd10395da20bdba5754f65f9201b9dc344502a2aa63154f7180632dce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5858cd10395da20bdba5754f65f9201b9dc344502a2aa63154f7180632dce9->enter($__internal_2c5858cd10395da20bdba5754f65f9201b9dc344502a2aa63154f7180632dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_eb62fb2326be0a7e95b2cb43592689584b47f17e41c12e7ba72cf08735988324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb62fb2326be0a7e95b2cb43592689584b47f17e41c12e7ba72cf08735988324->enter($__internal_eb62fb2326be0a7e95b2cb43592689584b47f17e41c12e7ba72cf08735988324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_eb62fb2326be0a7e95b2cb43592689584b47f17e41c12e7ba72cf08735988324->leave($__internal_eb62fb2326be0a7e95b2cb43592689584b47f17e41c12e7ba72cf08735988324_prof);

        
        $__internal_2c5858cd10395da20bdba5754f65f9201b9dc344502a2aa63154f7180632dce9->leave($__internal_2c5858cd10395da20bdba5754f65f9201b9dc344502a2aa63154f7180632dce9_prof);

    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7a1d0b2ffbc86d2d65c98c3ea6f11b713b3bab65804c91f86e87b65d29311fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1d0b2ffbc86d2d65c98c3ea6f11b713b3bab65804c91f86e87b65d29311fca->enter($__internal_7a1d0b2ffbc86d2d65c98c3ea6f11b713b3bab65804c91f86e87b65d29311fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6199613b4e8cd116a766477e32396d900b5108d87f1611c10026a8150c5f2484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6199613b4e8cd116a766477e32396d900b5108d87f1611c10026a8150c5f2484->enter($__internal_6199613b4e8cd116a766477e32396d900b5108d87f1611c10026a8150c5f2484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_6199613b4e8cd116a766477e32396d900b5108d87f1611c10026a8150c5f2484->leave($__internal_6199613b4e8cd116a766477e32396d900b5108d87f1611c10026a8150c5f2484_prof);

        
        $__internal_7a1d0b2ffbc86d2d65c98c3ea6f11b713b3bab65804c91f86e87b65d29311fca->leave($__internal_7a1d0b2ffbc86d2d65c98c3ea6f11b713b3bab65804c91f86e87b65d29311fca_prof);

    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_29802bb4086b30c6db5c51df6ea0b6e32b46635715080a1ce01d0f62ff92236a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29802bb4086b30c6db5c51df6ea0b6e32b46635715080a1ce01d0f62ff92236a->enter($__internal_29802bb4086b30c6db5c51df6ea0b6e32b46635715080a1ce01d0f62ff92236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ffab001b33a0ffffb84af6821d28bd05e370110a471869a25dbf44f6aa3e1ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffab001b33a0ffffb84af6821d28bd05e370110a471869a25dbf44f6aa3e1ff2->enter($__internal_ffab001b33a0ffffb84af6821d28bd05e370110a471869a25dbf44f6aa3e1ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_ffab001b33a0ffffb84af6821d28bd05e370110a471869a25dbf44f6aa3e1ff2->leave($__internal_ffab001b33a0ffffb84af6821d28bd05e370110a471869a25dbf44f6aa3e1ff2_prof);

        
        $__internal_29802bb4086b30c6db5c51df6ea0b6e32b46635715080a1ce01d0f62ff92236a->leave($__internal_29802bb4086b30c6db5c51df6ea0b6e32b46635715080a1ce01d0f62ff92236a_prof);

    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b1740fddc4cb8de9f4fee18576be7c46bf890966e3d0c00204731c0397bc237a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1740fddc4cb8de9f4fee18576be7c46bf890966e3d0c00204731c0397bc237a->enter($__internal_b1740fddc4cb8de9f4fee18576be7c46bf890966e3d0c00204731c0397bc237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_85b791d1a121f7592838bccd5bceb4cf72c0a8e88614852fdd70c78a5895d5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b791d1a121f7592838bccd5bceb4cf72c0a8e88614852fdd70c78a5895d5b5->enter($__internal_85b791d1a121f7592838bccd5bceb4cf72c0a8e88614852fdd70c78a5895d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_85b791d1a121f7592838bccd5bceb4cf72c0a8e88614852fdd70c78a5895d5b5->leave($__internal_85b791d1a121f7592838bccd5bceb4cf72c0a8e88614852fdd70c78a5895d5b5_prof);

        
        $__internal_b1740fddc4cb8de9f4fee18576be7c46bf890966e3d0c00204731c0397bc237a->leave($__internal_b1740fddc4cb8de9f4fee18576be7c46bf890966e3d0c00204731c0397bc237a_prof);

    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_123c3ae3ce197487693f30c3694fadac9c6d1a5523c6c3ef8717590a9248ae6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123c3ae3ce197487693f30c3694fadac9c6d1a5523c6c3ef8717590a9248ae6b->enter($__internal_123c3ae3ce197487693f30c3694fadac9c6d1a5523c6c3ef8717590a9248ae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7260d6c06dffa30c3eaafb9f4fad52f6fbae58dd606cc99608a6273c1853c8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7260d6c06dffa30c3eaafb9f4fad52f6fbae58dd606cc99608a6273c1853c8a9->enter($__internal_7260d6c06dffa30c3eaafb9f4fad52f6fbae58dd606cc99608a6273c1853c8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_7260d6c06dffa30c3eaafb9f4fad52f6fbae58dd606cc99608a6273c1853c8a9->leave($__internal_7260d6c06dffa30c3eaafb9f4fad52f6fbae58dd606cc99608a6273c1853c8a9_prof);

        
        $__internal_123c3ae3ce197487693f30c3694fadac9c6d1a5523c6c3ef8717590a9248ae6b->leave($__internal_123c3ae3ce197487693f30c3694fadac9c6d1a5523c6c3ef8717590a9248ae6b_prof);

    }

    // line 367
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e7b73726bb8b110f9b9fa1427ccee2fe89d7eea30a807918152e420379065efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b73726bb8b110f9b9fa1427ccee2fe89d7eea30a807918152e420379065efd->enter($__internal_e7b73726bb8b110f9b9fa1427ccee2fe89d7eea30a807918152e420379065efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d44dfb143bdd1fc0822d11230044c4caaf72c0b2287153d18ce69a663560f078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44dfb143bdd1fc0822d11230044c4caaf72c0b2287153d18ce69a663560f078->enter($__internal_d44dfb143bdd1fc0822d11230044c4caaf72c0b2287153d18ce69a663560f078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 368
        $context["show_label"] = false;
        // line 369
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d44dfb143bdd1fc0822d11230044c4caaf72c0b2287153d18ce69a663560f078->leave($__internal_d44dfb143bdd1fc0822d11230044c4caaf72c0b2287153d18ce69a663560f078_prof);

        
        $__internal_e7b73726bb8b110f9b9fa1427ccee2fe89d7eea30a807918152e420379065efd->leave($__internal_e7b73726bb8b110f9b9fa1427ccee2fe89d7eea30a807918152e420379065efd_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8308d0b2e1cfda51a55abe71de330b09a2b49296470c4755a91e77f34afc102c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8308d0b2e1cfda51a55abe71de330b09a2b49296470c4755a91e77f34afc102c->enter($__internal_8308d0b2e1cfda51a55abe71de330b09a2b49296470c4755a91e77f34afc102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4f4514208a9c771b626af8d550fa9a4f3fbd4913e9a74aa131cb7d74551c3444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4514208a9c771b626af8d550fa9a4f3fbd4913e9a74aa131cb7d74551c3444->enter($__internal_4f4514208a9c771b626af8d550fa9a4f3fbd4913e9a74aa131cb7d74551c3444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        $context["show_label"] = false;
        // line 374
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4f4514208a9c771b626af8d550fa9a4f3fbd4913e9a74aa131cb7d74551c3444->leave($__internal_4f4514208a9c771b626af8d550fa9a4f3fbd4913e9a74aa131cb7d74551c3444_prof);

        
        $__internal_8308d0b2e1cfda51a55abe71de330b09a2b49296470c4755a91e77f34afc102c->leave($__internal_8308d0b2e1cfda51a55abe71de330b09a2b49296470c4755a91e77f34afc102c_prof);

    }

    // line 377
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_48063746d1974f8c46435e795441868b3d59db189a84245e0c07950af7f872c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48063746d1974f8c46435e795441868b3d59db189a84245e0c07950af7f872c2->enter($__internal_48063746d1974f8c46435e795441868b3d59db189a84245e0c07950af7f872c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_9722ca218fc414fb42501b5b908cbf9ce8babff4e8b072ac5b66d60402f85c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9722ca218fc414fb42501b5b908cbf9ce8babff4e8b072ac5b66d60402f85c0c->enter($__internal_9722ca218fc414fb42501b5b908cbf9ce8babff4e8b072ac5b66d60402f85c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

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
        
        $__internal_9722ca218fc414fb42501b5b908cbf9ce8babff4e8b072ac5b66d60402f85c0c->leave($__internal_9722ca218fc414fb42501b5b908cbf9ce8babff4e8b072ac5b66d60402f85c0c_prof);

        
        $__internal_48063746d1974f8c46435e795441868b3d59db189a84245e0c07950af7f872c2->leave($__internal_48063746d1974f8c46435e795441868b3d59db189a84245e0c07950af7f872c2_prof);

    }

    // line 398
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_2b46223c90cd405beef49b25d7a33c263870e50cee14973b843a5c3c7223da2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b46223c90cd405beef49b25d7a33c263870e50cee14973b843a5c3c7223da2f->enter($__internal_2b46223c90cd405beef49b25d7a33c263870e50cee14973b843a5c3c7223da2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_15f3093970a89ab2bd9a5c6a119605a2482737252f076c60de26824749a0d701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f3093970a89ab2bd9a5c6a119605a2482737252f076c60de26824749a0d701->enter($__internal_15f3093970a89ab2bd9a5c6a119605a2482737252f076c60de26824749a0d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

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
        
        $__internal_15f3093970a89ab2bd9a5c6a119605a2482737252f076c60de26824749a0d701->leave($__internal_15f3093970a89ab2bd9a5c6a119605a2482737252f076c60de26824749a0d701_prof);

        
        $__internal_2b46223c90cd405beef49b25d7a33c263870e50cee14973b843a5c3c7223da2f->leave($__internal_2b46223c90cd405beef49b25d7a33c263870e50cee14973b843a5c3c7223da2f_prof);

    }

    // line 420
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_340a37962d80f272c85a7d4e2f2a91c697c1633c1ca76bfe17791373b6cbc66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340a37962d80f272c85a7d4e2f2a91c697c1633c1ca76bfe17791373b6cbc66b->enter($__internal_340a37962d80f272c85a7d4e2f2a91c697c1633c1ca76bfe17791373b6cbc66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_551fd966fff10543f4366ccf0b180e80391a70f664784de355ec1c52f9712b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551fd966fff10543f4366ccf0b180e80391a70f664784de355ec1c52f9712b8b->enter($__internal_551fd966fff10543f4366ccf0b180e80391a70f664784de355ec1c52f9712b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

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
        
        $__internal_551fd966fff10543f4366ccf0b180e80391a70f664784de355ec1c52f9712b8b->leave($__internal_551fd966fff10543f4366ccf0b180e80391a70f664784de355ec1c52f9712b8b_prof);

        
        $__internal_340a37962d80f272c85a7d4e2f2a91c697c1633c1ca76bfe17791373b6cbc66b->leave($__internal_340a37962d80f272c85a7d4e2f2a91c697c1633c1ca76bfe17791373b6cbc66b_prof);

    }

    // line 434
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_9a6f4ce0dbc362307f841a406fd1e85f0116a37ea467b25bba184a8401f74ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6f4ce0dbc362307f841a406fd1e85f0116a37ea467b25bba184a8401f74ce5->enter($__internal_9a6f4ce0dbc362307f841a406fd1e85f0116a37ea467b25bba184a8401f74ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_0ad59636a1be9980ae1411c6f5d381b9731950d53845fd02a6972c89ec143620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad59636a1be9980ae1411c6f5d381b9731950d53845fd02a6972c89ec143620->enter($__internal_0ad59636a1be9980ae1411c6f5d381b9731950d53845fd02a6972c89ec143620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

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
        
        $__internal_0ad59636a1be9980ae1411c6f5d381b9731950d53845fd02a6972c89ec143620->leave($__internal_0ad59636a1be9980ae1411c6f5d381b9731950d53845fd02a6972c89ec143620_prof);

        
        $__internal_9a6f4ce0dbc362307f841a406fd1e85f0116a37ea467b25bba184a8401f74ce5->leave($__internal_9a6f4ce0dbc362307f841a406fd1e85f0116a37ea467b25bba184a8401f74ce5_prof);

    }

    // line 458
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_f5c06be959de2ca4878db24a40b08db19d2648ba1abca93e7f565ff4fbb86c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c06be959de2ca4878db24a40b08db19d2648ba1abca93e7f565ff4fbb86c5c->enter($__internal_f5c06be959de2ca4878db24a40b08db19d2648ba1abca93e7f565ff4fbb86c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_f7bc6faa3ae69bb5e4f7aa17bbd14021f7668ae0255fc24c445c916c480162d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bc6faa3ae69bb5e4f7aa17bbd14021f7668ae0255fc24c445c916c480162d2->enter($__internal_f7bc6faa3ae69bb5e4f7aa17bbd14021f7668ae0255fc24c445c916c480162d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 459
        echo "    ";
        $this->loadTemplate(($context["template"] ?? $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 459)->display($context);
        
        $__internal_f7bc6faa3ae69bb5e4f7aa17bbd14021f7668ae0255fc24c445c916c480162d2->leave($__internal_f7bc6faa3ae69bb5e4f7aa17bbd14021f7668ae0255fc24c445c916c480162d2_prof);

        
        $__internal_f5c06be959de2ca4878db24a40b08db19d2648ba1abca93e7f565ff4fbb86c5c->leave($__internal_f5c06be959de2ca4878db24a40b08db19d2648ba1abca93e7f565ff4fbb86c5c_prof);

    }

    // line 462
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_304a803c05557158d5ecc0ba4b348d3f90401ad0c826a069a0ffeb601b702562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304a803c05557158d5ecc0ba4b348d3f90401ad0c826a069a0ffeb601b702562->enter($__internal_304a803c05557158d5ecc0ba4b348d3f90401ad0c826a069a0ffeb601b702562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_3ea3aee8259107803c895241cb71921213acbc075c3a7342b6146b7088453f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea3aee8259107803c895241cb71921213acbc075c3a7342b6146b7088453f01->enter($__internal_3ea3aee8259107803c895241cb71921213acbc075c3a7342b6146b7088453f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

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
        
        $__internal_3ea3aee8259107803c895241cb71921213acbc075c3a7342b6146b7088453f01->leave($__internal_3ea3aee8259107803c895241cb71921213acbc075c3a7342b6146b7088453f01_prof);

        
        $__internal_304a803c05557158d5ecc0ba4b348d3f90401ad0c826a069a0ffeb601b702562->leave($__internal_304a803c05557158d5ecc0ba4b348d3f90401ad0c826a069a0ffeb601b702562_prof);

    }

    // line 502
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_a61771028f4465ec3a709410b2f2f086a5683f4e96a154f4564577cb41370cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61771028f4465ec3a709410b2f2f086a5683f4e96a154f4564577cb41370cbf->enter($__internal_a61771028f4465ec3a709410b2f2f086a5683f4e96a154f4564577cb41370cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_c6f16e71f9d05aef3c066fef8a3a06fd01d7cb8edf709a9c92090d0bb26774cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f16e71f9d05aef3c066fef8a3a06fd01d7cb8edf709a9c92090d0bb26774cb->enter($__internal_c6f16e71f9d05aef3c066fef8a3a06fd01d7cb8edf709a9c92090d0bb26774cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

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
        
        $__internal_c6f16e71f9d05aef3c066fef8a3a06fd01d7cb8edf709a9c92090d0bb26774cb->leave($__internal_c6f16e71f9d05aef3c066fef8a3a06fd01d7cb8edf709a9c92090d0bb26774cb_prof);

        
        $__internal_a61771028f4465ec3a709410b2f2f086a5683f4e96a154f4564577cb41370cbf->leave($__internal_a61771028f4465ec3a709410b2f2f086a5683f4e96a154f4564577cb41370cbf_prof);

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
