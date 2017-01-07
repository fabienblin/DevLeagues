<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_e69c91b644e85cda7b2114d1e00af361e555029ce11000b970019e2dce5bec24 extends Twig_Template
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
        $__internal_d716650d51670be9226c2729e101e12554cb9d611d2ffa8cf0d51525a35d6b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d716650d51670be9226c2729e101e12554cb9d611d2ffa8cf0d51525a35d6b78->enter($__internal_d716650d51670be9226c2729e101e12554cb9d611d2ffa8cf0d51525a35d6b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_6fdc578a103dde8cdf7e86c6ba912d48528c86f681c4d6e8a89a1d1b73cc30ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdc578a103dde8cdf7e86c6ba912d48528c86f681c4d6e8a89a1d1b73cc30ac->enter($__internal_6fdc578a103dde8cdf7e86c6ba912d48528c86f681c4d6e8a89a1d1b73cc30ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d716650d51670be9226c2729e101e12554cb9d611d2ffa8cf0d51525a35d6b78->leave($__internal_d716650d51670be9226c2729e101e12554cb9d611d2ffa8cf0d51525a35d6b78_prof);

        
        $__internal_6fdc578a103dde8cdf7e86c6ba912d48528c86f681c4d6e8a89a1d1b73cc30ac->leave($__internal_6fdc578a103dde8cdf7e86c6ba912d48528c86f681c4d6e8a89a1d1b73cc30ac_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9781f6cb83bd3252a69f03cdecd94036a017f54bef7e5c6e78c1c52f8bb9b9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9781f6cb83bd3252a69f03cdecd94036a017f54bef7e5c6e78c1c52f8bb9b9f7->enter($__internal_9781f6cb83bd3252a69f03cdecd94036a017f54bef7e5c6e78c1c52f8bb9b9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bfb0159a90d7da453783b560ec52ccd7d16d0ce13475bd4a8a1a40887b4ab5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb0159a90d7da453783b560ec52ccd7d16d0ce13475bd4a8a1a40887b4ab5be->enter($__internal_bfb0159a90d7da453783b560ec52ccd7d16d0ce13475bd4a8a1a40887b4ab5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_bfb0159a90d7da453783b560ec52ccd7d16d0ce13475bd4a8a1a40887b4ab5be->leave($__internal_bfb0159a90d7da453783b560ec52ccd7d16d0ce13475bd4a8a1a40887b4ab5be_prof);

        
        $__internal_9781f6cb83bd3252a69f03cdecd94036a017f54bef7e5c6e78c1c52f8bb9b9f7->leave($__internal_9781f6cb83bd3252a69f03cdecd94036a017f54bef7e5c6e78c1c52f8bb9b9f7_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_4f001e22cf0f3476381673fb7277becb1a88f8710c7bedb2e3c5899841f57285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f001e22cf0f3476381673fb7277becb1a88f8710c7bedb2e3c5899841f57285->enter($__internal_4f001e22cf0f3476381673fb7277becb1a88f8710c7bedb2e3c5899841f57285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        $__internal_c788bf0aeae47ec8be2285b0c6e51901dbfbf7574b4e2df63853434ff45ba9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c788bf0aeae47ec8be2285b0c6e51901dbfbf7574b4e2df63853434ff45ba9bb->enter($__internal_c788bf0aeae47ec8be2285b0c6e51901dbfbf7574b4e2df63853434ff45ba9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c788bf0aeae47ec8be2285b0c6e51901dbfbf7574b4e2df63853434ff45ba9bb->leave($__internal_c788bf0aeae47ec8be2285b0c6e51901dbfbf7574b4e2df63853434ff45ba9bb_prof);

        
        $__internal_4f001e22cf0f3476381673fb7277becb1a88f8710c7bedb2e3c5899841f57285->leave($__internal_4f001e22cf0f3476381673fb7277becb1a88f8710c7bedb2e3c5899841f57285_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_aad01ee6779a299e16f7a4588ab1b3d3564ac6796b9075232e19d7b47223dffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad01ee6779a299e16f7a4588ab1b3d3564ac6796b9075232e19d7b47223dffc->enter($__internal_aad01ee6779a299e16f7a4588ab1b3d3564ac6796b9075232e19d7b47223dffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_f6b3350882d1880375c8a29cea10a202260c2015dc046054aa6d007de79ac645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b3350882d1880375c8a29cea10a202260c2015dc046054aa6d007de79ac645->enter($__internal_f6b3350882d1880375c8a29cea10a202260c2015dc046054aa6d007de79ac645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_f6b3350882d1880375c8a29cea10a202260c2015dc046054aa6d007de79ac645->leave($__internal_f6b3350882d1880375c8a29cea10a202260c2015dc046054aa6d007de79ac645_prof);

        
        $__internal_aad01ee6779a299e16f7a4588ab1b3d3564ac6796b9075232e19d7b47223dffc->leave($__internal_aad01ee6779a299e16f7a4588ab1b3d3564ac6796b9075232e19d7b47223dffc_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1f969ae40dd1a2cadeb60e18173855df90dff6cbcc112082121b1b5243400d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f969ae40dd1a2cadeb60e18173855df90dff6cbcc112082121b1b5243400d93->enter($__internal_1f969ae40dd1a2cadeb60e18173855df90dff6cbcc112082121b1b5243400d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3ffa2303aff5e2522525d6d02496126fb791bb6586887dbf9801c440f20a32df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffa2303aff5e2522525d6d02496126fb791bb6586887dbf9801c440f20a32df->enter($__internal_3ffa2303aff5e2522525d6d02496126fb791bb6586887dbf9801c440f20a32df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_3ffa2303aff5e2522525d6d02496126fb791bb6586887dbf9801c440f20a32df->leave($__internal_3ffa2303aff5e2522525d6d02496126fb791bb6586887dbf9801c440f20a32df_prof);

        
        $__internal_1f969ae40dd1a2cadeb60e18173855df90dff6cbcc112082121b1b5243400d93->leave($__internal_1f969ae40dd1a2cadeb60e18173855df90dff6cbcc112082121b1b5243400d93_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_408d47a64ebb9dc6129c69bbb92ffc5034b88df896838056fa6f4dc0048677e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408d47a64ebb9dc6129c69bbb92ffc5034b88df896838056fa6f4dc0048677e3->enter($__internal_408d47a64ebb9dc6129c69bbb92ffc5034b88df896838056fa6f4dc0048677e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a8238f193e8691b3c7d2af22937184e8a5cf46e2b9bfcd881def38965e3767fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8238f193e8691b3c7d2af22937184e8a5cf46e2b9bfcd881def38965e3767fe->enter($__internal_a8238f193e8691b3c7d2af22937184e8a5cf46e2b9bfcd881def38965e3767fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_a8238f193e8691b3c7d2af22937184e8a5cf46e2b9bfcd881def38965e3767fe->leave($__internal_a8238f193e8691b3c7d2af22937184e8a5cf46e2b9bfcd881def38965e3767fe_prof);

        
        $__internal_408d47a64ebb9dc6129c69bbb92ffc5034b88df896838056fa6f4dc0048677e3->leave($__internal_408d47a64ebb9dc6129c69bbb92ffc5034b88df896838056fa6f4dc0048677e3_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d3c3a522d7fd628d1b1c662034f1dc1bc26ee2a6cfacfb7126a16de149138a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c3a522d7fd628d1b1c662034f1dc1bc26ee2a6cfacfb7126a16de149138a15->enter($__internal_d3c3a522d7fd628d1b1c662034f1dc1bc26ee2a6cfacfb7126a16de149138a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1635593990be7b2b96acef47fbab69a3d7acc13c314a581b4a5a044a5f6197ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1635593990be7b2b96acef47fbab69a3d7acc13c314a581b4a5a044a5f6197ff->enter($__internal_1635593990be7b2b96acef47fbab69a3d7acc13c314a581b4a5a044a5f6197ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = trim(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
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
        
        $__internal_1635593990be7b2b96acef47fbab69a3d7acc13c314a581b4a5a044a5f6197ff->leave($__internal_1635593990be7b2b96acef47fbab69a3d7acc13c314a581b4a5a044a5f6197ff_prof);

        
        $__internal_d3c3a522d7fd628d1b1c662034f1dc1bc26ee2a6cfacfb7126a16de149138a15->leave($__internal_d3c3a522d7fd628d1b1c662034f1dc1bc26ee2a6cfacfb7126a16de149138a15_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1fa701943bfdb9ea18ab7178f72fea1c41e4166a84a032db325339d5c276639d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa701943bfdb9ea18ab7178f72fea1c41e4166a84a032db325339d5c276639d->enter($__internal_1fa701943bfdb9ea18ab7178f72fea1c41e4166a84a032db325339d5c276639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_29b6fe6ab7f94d4572ff433ff85a5f761a291e5fc5ec3344f580a7288ae0ea73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b6fe6ab7f94d4572ff433ff85a5f761a291e5fc5ec3344f580a7288ae0ea73->enter($__internal_29b6fe6ab7f94d4572ff433ff85a5f761a291e5fc5ec3344f580a7288ae0ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
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
        
        $__internal_29b6fe6ab7f94d4572ff433ff85a5f761a291e5fc5ec3344f580a7288ae0ea73->leave($__internal_29b6fe6ab7f94d4572ff433ff85a5f761a291e5fc5ec3344f580a7288ae0ea73_prof);

        
        $__internal_1fa701943bfdb9ea18ab7178f72fea1c41e4166a84a032db325339d5c276639d->leave($__internal_1fa701943bfdb9ea18ab7178f72fea1c41e4166a84a032db325339d5c276639d_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_685ed382bf1807bff19cb3545310e4c175caf0249afbcd8ad6cde5420186f597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685ed382bf1807bff19cb3545310e4c175caf0249afbcd8ad6cde5420186f597->enter($__internal_685ed382bf1807bff19cb3545310e4c175caf0249afbcd8ad6cde5420186f597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e716b94b5a8d42930fbd1c20694bb23aedb8a0207103ba9e3a9657bf72e4fc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e716b94b5a8d42930fbd1c20694bb23aedb8a0207103ba9e3a9657bf72e4fc0b->enter($__internal_e716b94b5a8d42930fbd1c20694bb23aedb8a0207103ba9e3a9657bf72e4fc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_e716b94b5a8d42930fbd1c20694bb23aedb8a0207103ba9e3a9657bf72e4fc0b->leave($__internal_e716b94b5a8d42930fbd1c20694bb23aedb8a0207103ba9e3a9657bf72e4fc0b_prof);

        
        $__internal_685ed382bf1807bff19cb3545310e4c175caf0249afbcd8ad6cde5420186f597->leave($__internal_685ed382bf1807bff19cb3545310e4c175caf0249afbcd8ad6cde5420186f597_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a0d08e0f17379aba307e83c7326840c1da543f812f5f399e72caa5b1a52a5a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d08e0f17379aba307e83c7326840c1da543f812f5f399e72caa5b1a52a5a67->enter($__internal_a0d08e0f17379aba307e83c7326840c1da543f812f5f399e72caa5b1a52a5a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_94d811867a7cbc6d2d3accdefc8d8af8bb7576e8383e610de7e9402c50bb3d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d811867a7cbc6d2d3accdefc8d8af8bb7576e8383e610de7e9402c50bb3d70->enter($__internal_94d811867a7cbc6d2d3accdefc8d8af8bb7576e8383e610de7e9402c50bb3d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_94d811867a7cbc6d2d3accdefc8d8af8bb7576e8383e610de7e9402c50bb3d70->leave($__internal_94d811867a7cbc6d2d3accdefc8d8af8bb7576e8383e610de7e9402c50bb3d70_prof);

        
        $__internal_a0d08e0f17379aba307e83c7326840c1da543f812f5f399e72caa5b1a52a5a67->leave($__internal_a0d08e0f17379aba307e83c7326840c1da543f812f5f399e72caa5b1a52a5a67_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_99d0538c3eb3e52b7a64bb205a52fea3a836f843c70aeb5bd854aff190d265db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d0538c3eb3e52b7a64bb205a52fea3a836f843c70aeb5bd854aff190d265db->enter($__internal_99d0538c3eb3e52b7a64bb205a52fea3a836f843c70aeb5bd854aff190d265db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_69697b8fe303835416f77534c4870238f18a5bf685892be8d7176c2b6e4571c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69697b8fe303835416f77534c4870238f18a5bf685892be8d7176c2b6e4571c8->enter($__internal_69697b8fe303835416f77534c4870238f18a5bf685892be8d7176c2b6e4571c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
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
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 114
            echo "
        ";
            // line 115
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                    // line 124
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 125
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 126
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 129
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 137
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 139
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_69697b8fe303835416f77534c4870238f18a5bf685892be8d7176c2b6e4571c8->leave($__internal_69697b8fe303835416f77534c4870238f18a5bf685892be8d7176c2b6e4571c8_prof);

        
        $__internal_99d0538c3eb3e52b7a64bb205a52fea3a836f843c70aeb5bd854aff190d265db->leave($__internal_99d0538c3eb3e52b7a64bb205a52fea3a836f843c70aeb5bd854aff190d265db_prof);

    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4cff598acd7bc5bebfe1a4c996631f2a66d4d885b90ef9a1f4f01d4f4575d7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cff598acd7bc5bebfe1a4c996631f2a66d4d885b90ef9a1f4f01d4f4575d7c7->enter($__internal_4cff598acd7bc5bebfe1a4c996631f2a66d4d885b90ef9a1f4f01d4f4575d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4b22b8c36dc83bc73b0e3143b5d4f818db25588be94c97038432beff2fe8d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b22b8c36dc83bc73b0e3143b5d4f818db25588be94c97038432beff2fe8d234->enter($__internal_4b22b8c36dc83bc73b0e3143b5d4f818db25588be94c97038432beff2fe8d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4b22b8c36dc83bc73b0e3143b5d4f818db25588be94c97038432beff2fe8d234->leave($__internal_4b22b8c36dc83bc73b0e3143b5d4f818db25588be94c97038432beff2fe8d234_prof);

        
        $__internal_4cff598acd7bc5bebfe1a4c996631f2a66d4d885b90ef9a1f4f01d4f4575d7c7->leave($__internal_4cff598acd7bc5bebfe1a4c996631f2a66d4d885b90ef9a1f4f01d4f4575d7c7_prof);

    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cf2994d104001f281c835d7a248c66d2ac4bc204eb50c9a40ae267f60625608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2994d104001f281c835d7a248c66d2ac4bc204eb50c9a40ae267f60625608b->enter($__internal_cf2994d104001f281c835d7a248c66d2ac4bc204eb50c9a40ae267f60625608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e480c50915c747e93a7d07e79a73353f7065ec0c62de95bdb9e209bbbd46684b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e480c50915c747e93a7d07e79a73353f7065ec0c62de95bdb9e209bbbd46684b->enter($__internal_e480c50915c747e93a7d07e79a73353f7065ec0c62de95bdb9e209bbbd46684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e480c50915c747e93a7d07e79a73353f7065ec0c62de95bdb9e209bbbd46684b->leave($__internal_e480c50915c747e93a7d07e79a73353f7065ec0c62de95bdb9e209bbbd46684b_prof);

        
        $__internal_cf2994d104001f281c835d7a248c66d2ac4bc204eb50c9a40ae267f60625608b->leave($__internal_cf2994d104001f281c835d7a248c66d2ac4bc204eb50c9a40ae267f60625608b_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f8199ebd56ef56b0d888cfb1bfc4b553537f8170ef82f2fa18a3720cdec5c038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8199ebd56ef56b0d888cfb1bfc4b553537f8170ef82f2fa18a3720cdec5c038->enter($__internal_f8199ebd56ef56b0d888cfb1bfc4b553537f8170ef82f2fa18a3720cdec5c038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_80b1b20cb8c42f6d2c3ef9fb30150443eb9689fe8474945cbf5ad2fc649e6bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b1b20cb8c42f6d2c3ef9fb30150443eb9689fe8474945cbf5ad2fc649e6bc0->enter($__internal_80b1b20cb8c42f6d2c3ef9fb30150443eb9689fe8474945cbf5ad2fc649e6bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 153
        echo "    ";
        if ($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
            // line 154
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array());
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
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 159
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 160
                echo "        ";
            }
            // line 161
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 165
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 169
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 170
                echo "<span class=\"control-label__text\">";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 172
                echo "</span>";
            }
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_80b1b20cb8c42f6d2c3ef9fb30150443eb9689fe8474945cbf5ad2fc649e6bc0->leave($__internal_80b1b20cb8c42f6d2c3ef9fb30150443eb9689fe8474945cbf5ad2fc649e6bc0_prof);

        
        $__internal_f8199ebd56ef56b0d888cfb1bfc4b553537f8170ef82f2fa18a3720cdec5c038->leave($__internal_f8199ebd56ef56b0d888cfb1bfc4b553537f8170ef82f2fa18a3720cdec5c038_prof);

    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c27c3b4b7cfee1232ea9e36552fcc87440d0922b0a104e3212d63b553c67ca42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27c3b4b7cfee1232ea9e36552fcc87440d0922b0a104e3212d63b553c67ca42->enter($__internal_c27c3b4b7cfee1232ea9e36552fcc87440d0922b0a104e3212d63b553c67ca42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_7754e62fa57734bf15f0f920ae5b108531130b08571eb9997e60f2ef216bf532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7754e62fa57734bf15f0f920ae5b108531130b08571eb9997e60f2ef216bf532->enter($__internal_7754e62fa57734bf15f0f920ae5b108531130b08571eb9997e60f2ef216bf532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 179
        ob_start();
        // line 180
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 181
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        
        $__internal_7754e62fa57734bf15f0f920ae5b108531130b08571eb9997e60f2ef216bf532->leave($__internal_7754e62fa57734bf15f0f920ae5b108531130b08571eb9997e60f2ef216bf532_prof);

        
        $__internal_c27c3b4b7cfee1232ea9e36552fcc87440d0922b0a104e3212d63b553c67ca42->leave($__internal_c27c3b4b7cfee1232ea9e36552fcc87440d0922b0a104e3212d63b553c67ca42_prof);

    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d041e0cbe8444c536f59cd6def6c2335488815b13e51315e333e220f2f391cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d041e0cbe8444c536f59cd6def6c2335488815b13e51315e333e220f2f391cc7->enter($__internal_d041e0cbe8444c536f59cd6def6c2335488815b13e51315e333e220f2f391cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_364f78ebec6ce7de504373ed1b70568db637902cbe88bcc0b05fcf4f495b5f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364f78ebec6ce7de504373ed1b70568db637902cbe88bcc0b05fcf4f495b5f53->enter($__internal_364f78ebec6ce7de504373ed1b70568db637902cbe88bcc0b05fcf4f495b5f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 192
        ob_start();
        // line 193
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
            // line 194
            echo "        ";
            $context["required"] = false;
            // line 195
            echo "    ";
        } elseif (((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
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
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 200
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 201
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 203
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 204
            if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 205
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 206
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 211
                echo "                </option>
            ";
            } elseif ((            // line 212
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
                // line 213
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 214
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 215
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 219
                echo "                </option>
            ";
            }
            // line 221
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 222
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 223
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 224
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 225
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 227
                echo "            ";
            }
            // line 228
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 229
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_364f78ebec6ce7de504373ed1b70568db637902cbe88bcc0b05fcf4f495b5f53->leave($__internal_364f78ebec6ce7de504373ed1b70568db637902cbe88bcc0b05fcf4f495b5f53_prof);

        
        $__internal_d041e0cbe8444c536f59cd6def6c2335488815b13e51315e333e220f2f391cc7->leave($__internal_d041e0cbe8444c536f59cd6def6c2335488815b13e51315e333e220f2f391cc7_prof);

    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0cd09e70fd9114d6feb99ed15a3e905bb54d5f6d75531bc20232b870260265d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd09e70fd9114d6feb99ed15a3e905bb54d5f6d75531bc20232b870260265d5->enter($__internal_0cd09e70fd9114d6feb99ed15a3e905bb54d5f6d75531bc20232b870260265d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e1c5d03181e8b61b6ddaa65b26e077a3b86a3d74a054b3a8138a947347d43004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c5d03181e8b61b6ddaa65b26e077a3b86a3d74a054b3a8138a947347d43004->enter($__internal_e1c5d03181e8b61b6ddaa65b26e077a3b86a3d74a054b3a8138a947347d43004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 236
        ob_start();
        // line 237
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 238
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 240
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 241
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 244
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 245
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 246
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 247
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 248
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 249
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e1c5d03181e8b61b6ddaa65b26e077a3b86a3d74a054b3a8138a947347d43004->leave($__internal_e1c5d03181e8b61b6ddaa65b26e077a3b86a3d74a054b3a8138a947347d43004_prof);

        
        $__internal_0cd09e70fd9114d6feb99ed15a3e905bb54d5f6d75531bc20232b870260265d5->leave($__internal_0cd09e70fd9114d6feb99ed15a3e905bb54d5f6d75531bc20232b870260265d5_prof);

    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5e9eb537789b9b2b5bf3dbc88dba45182bf11d93258a00cf95523d96516b9d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9eb537789b9b2b5bf3dbc88dba45182bf11d93258a00cf95523d96516b9d3e->enter($__internal_5e9eb537789b9b2b5bf3dbc88dba45182bf11d93258a00cf95523d96516b9d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4eeffe8d5b2b2bf602a68340a2eab3035a2862b0a9e50ad6d1ae06f842e16fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eeffe8d5b2b2bf602a68340a2eab3035a2862b0a9e50ad6d1ae06f842e16fd2->enter($__internal_4eeffe8d5b2b2bf602a68340a2eab3035a2862b0a9e50ad6d1ae06f842e16fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 256
        ob_start();
        // line 257
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 258
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 260
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 261
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 262
                echo "        ";
            }
            // line 263
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 264
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 266
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 268
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 269
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 270
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 273
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 274
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 275
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 278
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4eeffe8d5b2b2bf602a68340a2eab3035a2862b0a9e50ad6d1ae06f842e16fd2->leave($__internal_4eeffe8d5b2b2bf602a68340a2eab3035a2862b0a9e50ad6d1ae06f842e16fd2_prof);

        
        $__internal_5e9eb537789b9b2b5bf3dbc88dba45182bf11d93258a00cf95523d96516b9d3e->leave($__internal_5e9eb537789b9b2b5bf3dbc88dba45182bf11d93258a00cf95523d96516b9d3e_prof);

    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2b59b2bb543924b4d14f36cf7657c3866ae6ec30f94170ddfea2e2ac2166c517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b59b2bb543924b4d14f36cf7657c3866ae6ec30f94170ddfea2e2ac2166c517->enter($__internal_2b59b2bb543924b4d14f36cf7657c3866ae6ec30f94170ddfea2e2ac2166c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9b118a2ef3acdec5783130d4c6472a4cc5f287da7e383eb6218877590c2349d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b118a2ef3acdec5783130d4c6472a4cc5f287da7e383eb6218877590c2349d9->enter($__internal_9b118a2ef3acdec5783130d4c6472a4cc5f287da7e383eb6218877590c2349d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 284
        ob_start();
        // line 285
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 286
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 288
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
            // line 289
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 290
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 291
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "

            ";
            // line 293
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 294
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 295
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 298
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 300
            echo "
            ";
            // line 301
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 302
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 303
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 306
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 308
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b118a2ef3acdec5783130d4c6472a4cc5f287da7e383eb6218877590c2349d9->leave($__internal_9b118a2ef3acdec5783130d4c6472a4cc5f287da7e383eb6218877590c2349d9_prof);

        
        $__internal_2b59b2bb543924b4d14f36cf7657c3866ae6ec30f94170ddfea2e2ac2166c517->leave($__internal_2b59b2bb543924b4d14f36cf7657c3866ae6ec30f94170ddfea2e2ac2166c517_prof);

    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_24acfee8528ab27d333487ae0213a22ce42471bce7b480cd74b4f4dcfccb3a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24acfee8528ab27d333487ae0213a22ce42471bce7b480cd74b4f4dcfccb3a20->enter($__internal_24acfee8528ab27d333487ae0213a22ce42471bce7b480cd74b4f4dcfccb3a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_059040470b6f05b55a68c858a5d25f13411893a0dd326ed5297f6718dec91f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059040470b6f05b55a68c858a5d25f13411893a0dd326ed5297f6718dec91f40->enter($__internal_059040470b6f05b55a68c858a5d25f13411893a0dd326ed5297f6718dec91f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 314
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label")), true)) : (true));
        // line 315
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 316
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 317
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
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
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 323
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 324
            echo "        ";
        }
        // line 325
        echo "
        ";
        // line 326
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 327
            echo "            ";
            // line 328
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 329
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 330
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 331
                    echo "                ";
                } else {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 333
                    echo "                ";
                }
                // line 334
                echo "            ";
            } else {
                // line 335
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9");
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
        if ((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label"))) {
            // line 340
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 342
        echo "
        ";
        // line 343
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
            // line 344
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 345
            echo "        ";
        }
        // line 346
        echo "
        ";
        // line 347
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 348
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 349
            echo "        ";
        }
        // line 350
        echo "
        <div class=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 352
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 353
        echo "
            ";
        // line 354
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 355
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 356
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 359
        echo "
            ";
        // line 360
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 361
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), array(), (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 363
        echo "        </div>
    </div>
";
        
        $__internal_059040470b6f05b55a68c858a5d25f13411893a0dd326ed5297f6718dec91f40->leave($__internal_059040470b6f05b55a68c858a5d25f13411893a0dd326ed5297f6718dec91f40_prof);

        
        $__internal_24acfee8528ab27d333487ae0213a22ce42471bce7b480cd74b4f4dcfccb3a20->leave($__internal_24acfee8528ab27d333487ae0213a22ce42471bce7b480cd74b4f4dcfccb3a20_prof);

    }

    // line 367
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3fc61451a12ca35f0da5aa85035331378b148350c28601bca709e246ffe7f734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc61451a12ca35f0da5aa85035331378b148350c28601bca709e246ffe7f734->enter($__internal_3fc61451a12ca35f0da5aa85035331378b148350c28601bca709e246ffe7f734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a4136161be22863fa3849e8a175f50d7846738c5e81f6ad667616aa08b6b745f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4136161be22863fa3849e8a175f50d7846738c5e81f6ad667616aa08b6b745f->enter($__internal_a4136161be22863fa3849e8a175f50d7846738c5e81f6ad667616aa08b6b745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 368
        $context["show_label"] = false;
        // line 369
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a4136161be22863fa3849e8a175f50d7846738c5e81f6ad667616aa08b6b745f->leave($__internal_a4136161be22863fa3849e8a175f50d7846738c5e81f6ad667616aa08b6b745f_prof);

        
        $__internal_3fc61451a12ca35f0da5aa85035331378b148350c28601bca709e246ffe7f734->leave($__internal_3fc61451a12ca35f0da5aa85035331378b148350c28601bca709e246ffe7f734_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_980a2b774ee4242e444f7e2bbf7d279104b0440e6603a13e119e21023cf2ecdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980a2b774ee4242e444f7e2bbf7d279104b0440e6603a13e119e21023cf2ecdd->enter($__internal_980a2b774ee4242e444f7e2bbf7d279104b0440e6603a13e119e21023cf2ecdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d5c862406ed2a073114ce8b48ddfd75e97b93d0368094b040dbcde2fe7d9d893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c862406ed2a073114ce8b48ddfd75e97b93d0368094b040dbcde2fe7d9d893->enter($__internal_d5c862406ed2a073114ce8b48ddfd75e97b93d0368094b040dbcde2fe7d9d893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        $context["show_label"] = false;
        // line 374
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5c862406ed2a073114ce8b48ddfd75e97b93d0368094b040dbcde2fe7d9d893->leave($__internal_d5c862406ed2a073114ce8b48ddfd75e97b93d0368094b040dbcde2fe7d9d893_prof);

        
        $__internal_980a2b774ee4242e444f7e2bbf7d279104b0440e6603a13e119e21023cf2ecdd->leave($__internal_980a2b774ee4242e444f7e2bbf7d279104b0440e6603a13e119e21023cf2ecdd_prof);

    }

    // line 377
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_fd4c09c21c5e3573401f3b49ad6514c60e438aa9a49ccaa227ff9849cbacb535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4c09c21c5e3573401f3b49ad6514c60e438aa9a49ccaa227ff9849cbacb535->enter($__internal_fd4c09c21c5e3573401f3b49ad6514c60e438aa9a49ccaa227ff9849cbacb535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_450963a9a534c706a8cce0eddf7815a3b07f2dc8eb78a6a0b294f1a36caef11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450963a9a534c706a8cce0eddf7815a3b07f2dc8eb78a6a0b294f1a36caef11c->enter($__internal_450963a9a534c706a8cce0eddf7815a3b07f2dc8eb78a6a0b294f1a36caef11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 378
        ob_start();
        // line 379
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 380
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 390
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 391
            echo "                </div>
            </div>
        ";
        }
        // line 394
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_450963a9a534c706a8cce0eddf7815a3b07f2dc8eb78a6a0b294f1a36caef11c->leave($__internal_450963a9a534c706a8cce0eddf7815a3b07f2dc8eb78a6a0b294f1a36caef11c_prof);

        
        $__internal_fd4c09c21c5e3573401f3b49ad6514c60e438aa9a49ccaa227ff9849cbacb535->leave($__internal_fd4c09c21c5e3573401f3b49ad6514c60e438aa9a49ccaa227ff9849cbacb535_prof);

    }

    // line 398
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_6c5823c0caccd83e7d7359c1d02c0e2a08f9e3b9eefad479edd4f7236c6ffe2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5823c0caccd83e7d7359c1d02c0e2a08f9e3b9eefad479edd4f7236c6ffe2a->enter($__internal_6c5823c0caccd83e7d7359c1d02c0e2a08f9e3b9eefad479edd4f7236c6ffe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_9cb95321292464e69d76ae97e53fa5b7d723e9e8c014dddd51eaa361b326a16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb95321292464e69d76ae97e53fa5b7d723e9e8c014dddd51eaa361b326a16f->enter($__internal_9cb95321292464e69d76ae97e53fa5b7d723e9e8c014dddd51eaa361b326a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 399
        ob_start();
        // line 400
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 401
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 402
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"));
            // line 403
            echo "        ";
            $context["allow_delete"] = true;
            // line 404
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 405
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) ? $context["allow_delete_backup"] : $this->getContext($context, "allow_delete_backup"));
            // line 406
            echo "    ";
        }
        // line 407
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 413
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 414
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 416
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9cb95321292464e69d76ae97e53fa5b7d723e9e8c014dddd51eaa361b326a16f->leave($__internal_9cb95321292464e69d76ae97e53fa5b7d723e9e8c014dddd51eaa361b326a16f_prof);

        
        $__internal_6c5823c0caccd83e7d7359c1d02c0e2a08f9e3b9eefad479edd4f7236c6ffe2a->leave($__internal_6c5823c0caccd83e7d7359c1d02c0e2a08f9e3b9eefad479edd4f7236c6ffe2a_prof);

    }

    // line 420
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_ff1879d22b3a83e6db4905161908893621b7d30455a2aa496e4cb78c5856eefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1879d22b3a83e6db4905161908893621b7d30455a2aa496e4cb78c5856eefb->enter($__internal_ff1879d22b3a83e6db4905161908893621b7d30455a2aa496e4cb78c5856eefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_a45fce6f284ff67a8f60e5adf39f93dba624a8cb522782ab62e188a4a53b0155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45fce6f284ff67a8f60e5adf39f93dba624a8cb522782ab62e188a4a53b0155->enter($__internal_a45fce6f284ff67a8f60e5adf39f93dba624a8cb522782ab62e188a4a53b0155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 421
        echo "    ";
        ob_start();
        // line 422
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 423
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a45fce6f284ff67a8f60e5adf39f93dba624a8cb522782ab62e188a4a53b0155->leave($__internal_a45fce6f284ff67a8f60e5adf39f93dba624a8cb522782ab62e188a4a53b0155_prof);

        
        $__internal_ff1879d22b3a83e6db4905161908893621b7d30455a2aa496e4cb78c5856eefb->leave($__internal_ff1879d22b3a83e6db4905161908893621b7d30455a2aa496e4cb78c5856eefb_prof);

    }

    // line 434
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_3caf0b90a74b315e2d92f7d2e37e4a18d1481c1ce5c8f3440f6104c34c72f3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caf0b90a74b315e2d92f7d2e37e4a18d1481c1ce5c8f3440f6104c34c72f3bc->enter($__internal_3caf0b90a74b315e2d92f7d2e37e4a18d1481c1ce5c8f3440f6104c34c72f3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_ca0f097c87f0834a4bdd1b57ff6d57e24060b9bce55aca5b7e9b1be96de4d168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0f097c87f0834a4bdd1b57ff6d57e24060b9bce55aca5b7e9b1be96de4d168->enter($__internal_ca0f097c87f0834a4bdd1b57ff6d57e24060b9bce55aca5b7e9b1be96de4d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 435
        echo "    ";
        ob_start();
        // line 436
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 438
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 440
        $context["div_class"] = "";
        // line 441
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
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
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 446
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 447
        echo "            </div>

            ";
        // line 449
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 450
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 451
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 454
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ca0f097c87f0834a4bdd1b57ff6d57e24060b9bce55aca5b7e9b1be96de4d168->leave($__internal_ca0f097c87f0834a4bdd1b57ff6d57e24060b9bce55aca5b7e9b1be96de4d168_prof);

        
        $__internal_3caf0b90a74b315e2d92f7d2e37e4a18d1481c1ce5c8f3440f6104c34c72f3bc->leave($__internal_3caf0b90a74b315e2d92f7d2e37e4a18d1481c1ce5c8f3440f6104c34c72f3bc_prof);

    }

    // line 458
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_5983057cfcdc5efd5c63e3d9c329700dd5939bfb088f337f70355935507b06da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5983057cfcdc5efd5c63e3d9c329700dd5939bfb088f337f70355935507b06da->enter($__internal_5983057cfcdc5efd5c63e3d9c329700dd5939bfb088f337f70355935507b06da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_9d76529c1944512a80804108ad6c002e754c8e73e038fd1df33d14a3d3f37883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d76529c1944512a80804108ad6c002e754c8e73e038fd1df33d14a3d3f37883->enter($__internal_9d76529c1944512a80804108ad6c002e754c8e73e038fd1df33d14a3d3f37883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 459
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 459)->display($context);
        
        $__internal_9d76529c1944512a80804108ad6c002e754c8e73e038fd1df33d14a3d3f37883->leave($__internal_9d76529c1944512a80804108ad6c002e754c8e73e038fd1df33d14a3d3f37883_prof);

        
        $__internal_5983057cfcdc5efd5c63e3d9c329700dd5939bfb088f337f70355935507b06da->leave($__internal_5983057cfcdc5efd5c63e3d9c329700dd5939bfb088f337f70355935507b06da_prof);

    }

    // line 462
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_4b96a5d6f85290fda78c4c08b2d790519018870ea641e76ca1c814838578c07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b96a5d6f85290fda78c4c08b2d790519018870ea641e76ca1c814838578c07d->enter($__internal_4b96a5d6f85290fda78c4c08b2d790519018870ea641e76ca1c814838578c07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_eea65b733fa5dca43d22956bef2a6b60ecffa1e2c9fa24d46d7ce0137bcfcea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea65b733fa5dca43d22956bef2a6b60ecffa1e2c9fa24d46d7ce0137bcfcea4->enter($__internal_eea65b733fa5dca43d22956bef2a6b60ecffa1e2c9fa24d46d7ce0137bcfcea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 463
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 464
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 465
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 467
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 468
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 470
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 479
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
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
        
        $__internal_eea65b733fa5dca43d22956bef2a6b60ecffa1e2c9fa24d46d7ce0137bcfcea4->leave($__internal_eea65b733fa5dca43d22956bef2a6b60ecffa1e2c9fa24d46d7ce0137bcfcea4_prof);

        
        $__internal_4b96a5d6f85290fda78c4c08b2d790519018870ea641e76ca1c814838578c07d->leave($__internal_4b96a5d6f85290fda78c4c08b2d790519018870ea641e76ca1c814838578c07d_prof);

    }

    // line 502
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_10ff1bdaf21dcc296708b0b5b572b544c33c836094793d49a40557da6d037ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ff1bdaf21dcc296708b0b5b572b544c33c836094793d49a40557da6d037ada->enter($__internal_10ff1bdaf21dcc296708b0b5b572b544c33c836094793d49a40557da6d037ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_f453caebe75be18586c7231257271a7ad56eef0fbbfe8cbfa010f241861bb36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f453caebe75be18586c7231257271a7ad56eef0fbbfe8cbfa010f241861bb36c->enter($__internal_f453caebe75be18586c7231257271a7ad56eef0fbbfe8cbfa010f241861bb36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 503
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 507
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_f453caebe75be18586c7231257271a7ad56eef0fbbfe8cbfa010f241861bb36c->leave($__internal_f453caebe75be18586c7231257271a7ad56eef0fbbfe8cbfa010f241861bb36c_prof);

        
        $__internal_10ff1bdaf21dcc296708b0b5b572b544c33c836094793d49a40557da6d037ada->leave($__internal_10ff1bdaf21dcc296708b0b5b572b544c33c836094793d49a40557da6d037ada_prof);

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
", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
