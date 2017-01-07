<?php

/* @AvanzuAdminTheme/layout/form-theme.html.twig */
class __TwigTemplate_58fc6535c03abf7548fdabe54357c1c249855cf1538825323d2ff4553d5d7d2c extends Twig_Template
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
        $__internal_a0067ae4444e8910344ea1a655f66b6fce41d319749052ed111201e3cedde128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0067ae4444e8910344ea1a655f66b6fce41d319749052ed111201e3cedde128->enter($__internal_a0067ae4444e8910344ea1a655f66b6fce41d319749052ed111201e3cedde128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/form-theme.html.twig"));

        $__internal_89d4d50a8f8a724aee66472d4acaa377bbae54d8bfe20974ed69c66091fcddc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d4d50a8f8a724aee66472d4acaa377bbae54d8bfe20974ed69c66091fcddc3->enter($__internal_89d4d50a8f8a724aee66472d4acaa377bbae54d8bfe20974ed69c66091fcddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0067ae4444e8910344ea1a655f66b6fce41d319749052ed111201e3cedde128->leave($__internal_a0067ae4444e8910344ea1a655f66b6fce41d319749052ed111201e3cedde128_prof);

        
        $__internal_89d4d50a8f8a724aee66472d4acaa377bbae54d8bfe20974ed69c66091fcddc3->leave($__internal_89d4d50a8f8a724aee66472d4acaa377bbae54d8bfe20974ed69c66091fcddc3_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_d18aa2404aee756f9b2d6b492da6ace0e23482299366eaba0ccf897682410ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18aa2404aee756f9b2d6b492da6ace0e23482299366eaba0ccf897682410ea0->enter($__internal_d18aa2404aee756f9b2d6b492da6ace0e23482299366eaba0ccf897682410ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_ee93430c706a08186747dc9f9e29ebcae719cb25bdf2e43baec1dffdf1e28b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee93430c706a08186747dc9f9e29ebcae719cb25bdf2e43baec1dffdf1e28b56->enter($__internal_ee93430c706a08186747dc9f9e29ebcae719cb25bdf2e43baec1dffdf1e28b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 4
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 5
        echo "
    ";
        // line 6
        if (twig_in_filter("checkbox", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")))) {
            // line 7
            echo "        ";
            $context["_class"] = " checkbox";
            // line 8
            echo "    ";
        } elseif (twig_in_filter("radio", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")))) {
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
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . (isset($context["_class"]) ? $context["_class"] : $this->getContext($context, "_class")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["class"] = (isset($context["_class"]) ? $context["_class"] : $this->getContext($context, "_class"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))));
        // line 20
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
        
        $__internal_ee93430c706a08186747dc9f9e29ebcae719cb25bdf2e43baec1dffdf1e28b56->leave($__internal_ee93430c706a08186747dc9f9e29ebcae719cb25bdf2e43baec1dffdf1e28b56_prof);

        
        $__internal_d18aa2404aee756f9b2d6b492da6ace0e23482299366eaba0ccf897682410ea0->leave($__internal_d18aa2404aee756f9b2d6b492da6ace0e23482299366eaba0ccf897682410ea0_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a79f279a891b7c1f84f8ca17c493337f682c40a6b9401764db70283f088dc0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79f279a891b7c1f84f8ca17c493337f682c40a6b9401764db70283f088dc0a1->enter($__internal_a79f279a891b7c1f84f8ca17c493337f682c40a6b9401764db70283f088dc0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d1b806d61ef480474f5313b8879577ebb6ea2b3febe233b1c06136ccced59ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b806d61ef480474f5313b8879577ebb6ea2b3febe233b1c06136ccced59ceb->enter($__internal_d1b806d61ef480474f5313b8879577ebb6ea2b3febe233b1c06136ccced59ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        
        $__internal_d1b806d61ef480474f5313b8879577ebb6ea2b3febe233b1c06136ccced59ceb->leave($__internal_d1b806d61ef480474f5313b8879577ebb6ea2b3febe233b1c06136ccced59ceb_prof);

        
        $__internal_a79f279a891b7c1f84f8ca17c493337f682c40a6b9401764db70283f088dc0a1->leave($__internal_a79f279a891b7c1f84f8ca17c493337f682c40a6b9401764db70283f088dc0a1_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5ec64e33f1660e5c9e002fe094b24a9766be995b9ab34f03f72023f71aaba3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec64e33f1660e5c9e002fe094b24a9766be995b9ab34f03f72023f71aaba3b7->enter($__internal_5ec64e33f1660e5c9e002fe094b24a9766be995b9ab34f03f72023f71aaba3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cb3765de1d364062b884bce47a0bb2999317c326317d55e71ada4864e6bfad3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3765de1d364062b884bce47a0bb2999317c326317d55e71ada4864e6bfad3b->enter($__internal_cb3765de1d364062b884bce47a0bb2999317c326317d55e71ada4864e6bfad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "form-control"));
        // line 35
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_cb3765de1d364062b884bce47a0bb2999317c326317d55e71ada4864e6bfad3b->leave($__internal_cb3765de1d364062b884bce47a0bb2999317c326317d55e71ada4864e6bfad3b_prof);

        
        $__internal_5ec64e33f1660e5c9e002fe094b24a9766be995b9ab34f03f72023f71aaba3b7->leave($__internal_5ec64e33f1660e5c9e002fe094b24a9766be995b9ab34f03f72023f71aaba3b7_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3ce4f9115ab97448bce3d623a6c6ca8ce15ed425d3b81afea2d6b60fefa9c424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce4f9115ab97448bce3d623a6c6ca8ce15ed425d3b81afea2d6b60fefa9c424->enter($__internal_3ce4f9115ab97448bce3d623a6c6ca8ce15ed425d3b81afea2d6b60fefa9c424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6db5bf5df08d314b42a7e97f561989e41f8619b8463dac3c3c85bc1ba3825f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db5bf5df08d314b42a7e97f561989e41f8619b8463dac3c3c85bc1ba3825f30->enter($__internal_6db5bf5df08d314b42a7e97f561989e41f8619b8463dac3c3c85bc1ba3825f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 39
        echo "    <div class=\"checkbox\">
        ";
        // line 40
        ob_start();
        // line 41
        echo "            ";
        if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 42
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 43
            echo "            ";
        }
        // line 44
        echo "            ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 45
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 46
            echo "            ";
        }
        // line 47
        echo "            ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 48
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 49
            echo "            ";
        }
        // line 50
        echo "
            <label";
        // line 51
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
            <input type=\"checkbox\" ";
        // line 52
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 53
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
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
        
        $__internal_6db5bf5df08d314b42a7e97f561989e41f8619b8463dac3c3c85bc1ba3825f30->leave($__internal_6db5bf5df08d314b42a7e97f561989e41f8619b8463dac3c3c85bc1ba3825f30_prof);

        
        $__internal_3ce4f9115ab97448bce3d623a6c6ca8ce15ed425d3b81afea2d6b60fefa9c424->leave($__internal_3ce4f9115ab97448bce3d623a6c6ca8ce15ed425d3b81afea2d6b60fefa9c424_prof);

    }

    // line 61
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_555c88198e22f1e35e5d84effa2a141588207789e86a293dd5cb8fd7a3dbf5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555c88198e22f1e35e5d84effa2a141588207789e86a293dd5cb8fd7a3dbf5ac->enter($__internal_555c88198e22f1e35e5d84effa2a141588207789e86a293dd5cb8fd7a3dbf5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8955aefa203c6aaf5e46d11159817053c01cae7c433907c616776a7934fc8daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8955aefa203c6aaf5e46d11159817053c01cae7c433907c616776a7934fc8daf->enter($__internal_8955aefa203c6aaf5e46d11159817053c01cae7c433907c616776a7934fc8daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 62
        echo "    <div class=\"radio\">
        ";
        // line 63
        ob_start();
        // line 64
        echo "            ";
        if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 65
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 66
            echo "            ";
        }
        // line 67
        echo "            ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 68
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 71
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 72
            echo "            ";
        }
        // line 73
        echo "            <label";
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
            <input type=\"radio\" ";
        // line 74
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 75
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 76
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
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
        
        $__internal_8955aefa203c6aaf5e46d11159817053c01cae7c433907c616776a7934fc8daf->leave($__internal_8955aefa203c6aaf5e46d11159817053c01cae7c433907c616776a7934fc8daf_prof);

        
        $__internal_555c88198e22f1e35e5d84effa2a141588207789e86a293dd5cb8fd7a3dbf5ac->leave($__internal_555c88198e22f1e35e5d84effa2a141588207789e86a293dd5cb8fd7a3dbf5ac_prof);

    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_927699572c85abfc2c506ff9c4b70ccc16be151f44391762f2e515d775c5ba22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927699572c85abfc2c506ff9c4b70ccc16be151f44391762f2e515d775c5ba22->enter($__internal_927699572c85abfc2c506ff9c4b70ccc16be151f44391762f2e515d775c5ba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_fe267079b82fdab12032db75f1f08992802005d7f3a9fad21c39dd651f21daee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe267079b82fdab12032db75f1f08992802005d7f3a9fad21c39dd651f21daee->enter($__internal_fe267079b82fdab12032db75f1f08992802005d7f3a9fad21c39dd651f21daee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 84
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            echo "        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            ";
            // line 90
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                // line 91
                echo "                ";
                $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " timepicker");
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
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "data-datepicker" => "on"));
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
            $context["date_pattern"] = (("<div class=\"row\">" . (isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern"))) . "</div>");
            // line 101
            echo "        ";
            echo twig_replace_filter(twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => "<div class=\"col-xs-4\">{{ year }}</div>", "{{ month }}" => "<div class=\"col-xs-4\">{{ month }}</div>", "{{ day }}" => "<div class=\"col-xs-4\">{{ day }}</div>")), array("{{ year }}" =>             // line 106
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 107
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 108
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 109
            echo "

    ";
        }
        
        $__internal_fe267079b82fdab12032db75f1f08992802005d7f3a9fad21c39dd651f21daee->leave($__internal_fe267079b82fdab12032db75f1f08992802005d7f3a9fad21c39dd651f21daee_prof);

        
        $__internal_927699572c85abfc2c506ff9c4b70ccc16be151f44391762f2e515d775c5ba22->leave($__internal_927699572c85abfc2c506ff9c4b70ccc16be151f44391762f2e515d775c5ba22_prof);

    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a502f01b55d942ff16cc341ae1aa94091e548eb6105a74e19d2bb0129fef2a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a502f01b55d942ff16cc341ae1aa94091e548eb6105a74e19d2bb0129fef2a63->enter($__internal_a502f01b55d942ff16cc341ae1aa94091e548eb6105a74e19d2bb0129fef2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0d0546aa48589e0dca90d7ea157e25b9b632bd5ac1f3b9c1b513aa923f2f75b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0546aa48589e0dca90d7ea157e25b9b632bd5ac1f3b9c1b513aa923f2f75b8->enter($__internal_0d0546aa48589e0dca90d7ea157e25b9b632bd5ac1f3b9c1b513aa923f2f75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 115
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 116
            echo "        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                ";
            // line 118
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                // line 119
                echo "                    ";
                $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " timepicker");
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
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "data-timepicker" => "on"));
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
        
        $__internal_0d0546aa48589e0dca90d7ea157e25b9b632bd5ac1f3b9c1b513aa923f2f75b8->leave($__internal_0d0546aa48589e0dca90d7ea157e25b9b632bd5ac1f3b9c1b513aa923f2f75b8_prof);

        
        $__internal_a502f01b55d942ff16cc341ae1aa94091e548eb6105a74e19d2bb0129fef2a63->leave($__internal_a502f01b55d942ff16cc341ae1aa94091e548eb6105a74e19d2bb0129fef2a63_prof);

    }

    // line 135
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_99011d882677afda1cb6ee81b6cd679eff368ecde46d8eba33d3fb3b61ca2692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99011d882677afda1cb6ee81b6cd679eff368ecde46d8eba33d3fb3b61ca2692->enter($__internal_99011d882677afda1cb6ee81b6cd679eff368ecde46d8eba33d3fb3b61ca2692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a301aaf040454bf65f43a91a8464d253f542fecfc2510aebf4f7ed8a5fac1368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a301aaf040454bf65f43a91a8464d253f542fecfc2510aebf4f7ed8a5fac1368->enter($__internal_a301aaf040454bf65f43a91a8464d253f542fecfc2510aebf4f7ed8a5fac1368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 136
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 137
        echo "    ";
        if ((twig_in_filter("checkbox", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types"))) || twig_in_filter("radio", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types"))))) {
            // line 138
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 143
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
            echo "
            ";
            // line 145
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 146
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        
        $__internal_a301aaf040454bf65f43a91a8464d253f542fecfc2510aebf4f7ed8a5fac1368->leave($__internal_a301aaf040454bf65f43a91a8464d253f542fecfc2510aebf4f7ed8a5fac1368_prof);

        
        $__internal_99011d882677afda1cb6ee81b6cd679eff368ecde46d8eba33d3fb3b61ca2692->leave($__internal_99011d882677afda1cb6ee81b6cd679eff368ecde46d8eba33d3fb3b61ca2692_prof);

    }

    // line 151
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c2f82f4333cb08837bf8930b37166232a8449329cfc53a9866c273fce5201151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f82f4333cb08837bf8930b37166232a8449329cfc53a9866c273fce5201151->enter($__internal_c2f82f4333cb08837bf8930b37166232a8449329cfc53a9866c273fce5201151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c7bb148802f682da2d0f348551400ac3960ef961a8a82873d00c7985cb13923f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bb148802f682da2d0f348551400ac3960ef961a8a82873d00c7985cb13923f->enter($__internal_c7bb148802f682da2d0f348551400ac3960ef961a8a82873d00c7985cb13923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 152
        echo "
    ";
        // line 153
        if (array_key_exists("help", $context)) {
            // line 154
            echo "        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html", null, true);
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
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 159
            echo "        <span class=\"required\" title=\"Dies ist ein Pflichtfeld\">*</span>
    ";
        }
        // line 161
        echo "
";
        
        $__internal_c7bb148802f682da2d0f348551400ac3960ef961a8a82873d00c7985cb13923f->leave($__internal_c7bb148802f682da2d0f348551400ac3960ef961a8a82873d00c7985cb13923f_prof);

        
        $__internal_c2f82f4333cb08837bf8930b37166232a8449329cfc53a9866c273fce5201151->leave($__internal_c2f82f4333cb08837bf8930b37166232a8449329cfc53a9866c273fce5201151_prof);

    }

    // line 164
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_23f2479ec74a23cec26a87afc896e39cd8f1c8baa9e5269fb8a26a5bcad1aadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f2479ec74a23cec26a87afc896e39cd8f1c8baa9e5269fb8a26a5bcad1aadb->enter($__internal_23f2479ec74a23cec26a87afc896e39cd8f1c8baa9e5269fb8a26a5bcad1aadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1f43cdabf694e959f5e6ffce751c0516b1731c34c563d355eadfbb1e80119fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f43cdabf694e959f5e6ffce751c0516b1731c34c563d355eadfbb1e80119fa4->enter($__internal_1f43cdabf694e959f5e6ffce751c0516b1731c34c563d355eadfbb1e80119fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 165
        echo "    ";
        ob_start();
        // line 166
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 167
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
        
        $__internal_1f43cdabf694e959f5e6ffce751c0516b1731c34c563d355eadfbb1e80119fa4->leave($__internal_1f43cdabf694e959f5e6ffce751c0516b1731c34c563d355eadfbb1e80119fa4_prof);

        
        $__internal_23f2479ec74a23cec26a87afc896e39cd8f1c8baa9e5269fb8a26a5bcad1aadb->leave($__internal_23f2479ec74a23cec26a87afc896e39cd8f1c8baa9e5269fb8a26a5bcad1aadb_prof);

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
", "@AvanzuAdminTheme/layout/form-theme.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/layout/form-theme.html.twig");
    }
}
