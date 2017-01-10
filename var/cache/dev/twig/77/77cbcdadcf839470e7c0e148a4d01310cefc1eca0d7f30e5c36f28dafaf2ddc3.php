<?php

/* @SonataAdmin/Core/dashboard.html.twig */
class __TwigTemplate_0a8048fd7e5a4321a3ab1feefcf97008acb28fe152299075dadbaced63e3fec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/Core/dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a80fee9df20b83b60bfcb8185e4052bbdb9001d2dd866cc86a5523f31dd364f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a80fee9df20b83b60bfcb8185e4052bbdb9001d2dd866cc86a5523f31dd364f->enter($__internal_4a80fee9df20b83b60bfcb8185e4052bbdb9001d2dd866cc86a5523f31dd364f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/dashboard.html.twig"));

        $__internal_418577da763dc1e8693bcbd077595284a47539100331b7f8cb9dbd8db563dac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418577da763dc1e8693bcbd077595284a47539100331b7f8cb9dbd8db563dac0->enter($__internal_418577da763dc1e8693bcbd077595284a47539100331b7f8cb9dbd8db563dac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/dashboard.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a80fee9df20b83b60bfcb8185e4052bbdb9001d2dd866cc86a5523f31dd364f->leave($__internal_4a80fee9df20b83b60bfcb8185e4052bbdb9001d2dd866cc86a5523f31dd364f_prof);

        
        $__internal_418577da763dc1e8693bcbd077595284a47539100331b7f8cb9dbd8db563dac0->leave($__internal_418577da763dc1e8693bcbd077595284a47539100331b7f8cb9dbd8db563dac0_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d47eef9d3900c44a9a01944367a6926b81a95ae8f881e30570af29645316bda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47eef9d3900c44a9a01944367a6926b81a95ae8f881e30570af29645316bda7->enter($__internal_d47eef9d3900c44a9a01944367a6926b81a95ae8f881e30570af29645316bda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18825cf4de8206e2b576048c6015ff7de859cb50a0cd40236ce26a7b52a4bf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18825cf4de8206e2b576048c6015ff7de859cb50a0cd40236ce26a7b52a4bf03->enter($__internal_18825cf4de8206e2b576048c6015ff7de859cb50a0cd40236ce26a7b52a4bf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_18825cf4de8206e2b576048c6015ff7de859cb50a0cd40236ce26a7b52a4bf03->leave($__internal_18825cf4de8206e2b576048c6015ff7de859cb50a0cd40236ce26a7b52a4bf03_prof);

        
        $__internal_d47eef9d3900c44a9a01944367a6926b81a95ae8f881e30570af29645316bda7->leave($__internal_d47eef9d3900c44a9a01944367a6926b81a95ae8f881e30570af29645316bda7_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_22ffee62d4bf08b8a85b5c9503465aac093a749410d6f34c62fb1d30493f5c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ffee62d4bf08b8a85b5c9503465aac093a749410d6f34c62fb1d30493f5c9f->enter($__internal_22ffee62d4bf08b8a85b5c9503465aac093a749410d6f34c62fb1d30493f5c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ca184f0a4b2289960c2ec0e5b1655364424080f2924508e34129dda003c345f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca184f0a4b2289960c2ec0e5b1655364424080f2924508e34129dda003c345f9->enter($__internal_ca184f0a4b2289960c2ec0e5b1655364424080f2924508e34129dda003c345f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_ca184f0a4b2289960c2ec0e5b1655364424080f2924508e34129dda003c345f9->leave($__internal_ca184f0a4b2289960c2ec0e5b1655364424080f2924508e34129dda003c345f9_prof);

        
        $__internal_22ffee62d4bf08b8a85b5c9503465aac093a749410d6f34c62fb1d30493f5c9f->leave($__internal_22ffee62d4bf08b8a85b5c9503465aac093a749410d6f34c62fb1d30493f5c9f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_5cb063af04c5b221bdeaf59444ae72f58fd76b3d4d32cb90049c599b41b448bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb063af04c5b221bdeaf59444ae72f58fd76b3d4d32cb90049c599b41b448bf->enter($__internal_5cb063af04c5b221bdeaf59444ae72f58fd76b3d4d32cb90049c599b41b448bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4215c10e09ec1aaab8753cad363750740450381cf5ff6245fff30915d21d74cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4215c10e09ec1aaab8753cad363750740450381cf5ff6245fff30915d21d74cc->enter($__internal_4215c10e09ec1aaab8753cad363750740450381cf5ff6245fff30915d21d74cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "center", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "top", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "bottom", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()))));
        echo "

    ";
        // line 55
        if (($context["has_top"] ?? $this->getContext($context, "has_top"))) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        echo "        ";
        $context["width_right"] = 4;
        // line 70
        echo "        ";
        $context["width_center"] = 4;
        // line 71
        echo "
        ";
        // line 73
        echo "        ";
        if ( !($context["has_center"] ?? $this->getContext($context, "has_center"))) {
            // line 74
            echo "            ";
            $context["width_left"] = 6;
            // line 75
            echo "            ";
            $context["width_right"] = 6;
            // line 76
            echo "        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if (( !($context["has_left"] ?? $this->getContext($context, "has_left")) &&  !($context["has_right"] ?? $this->getContext($context, "has_right")))) {
            // line 80
            echo "            ";
            $context["width_center"] = 12;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if ((($context["has_left"] ?? $this->getContext($context, "has_left")) || ($context["has_right"] ?? $this->getContext($context, "has_right")))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_left"] ?? $this->getContext($context, "width_left")), "html", null, true);
            echo "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 88
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if (($context["has_center"] ?? $this->getContext($context, "has_center"))) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_center"] ?? $this->getContext($context, "width_center")), "html", null, true);
            echo "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                echo "                    ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 98
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 105
        echo "        ";
        if ((($context["has_left"] ?? $this->getContext($context, "has_left")) || ($context["has_right"] ?? $this->getContext($context, "has_right")))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_right"] ?? $this->getContext($context, "width_right")), "html", null, true);
            echo "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 109
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if (($context["has_bottom"] ?? $this->getContext($context, "has_bottom"))) {
            // line 117
            echo "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 121
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()))));
        echo "

";
        
        $__internal_4215c10e09ec1aaab8753cad363750740450381cf5ff6245fff30915d21d74cc->leave($__internal_4215c10e09ec1aaab8753cad363750740450381cf5ff6245fff30915d21d74cc_prof);

        
        $__internal_5cb063af04c5b221bdeaf59444ae72f58fd76b3d4d32cb90049c599b41b448bf->leave($__internal_5cb063af04c5b221bdeaf59444ae72f58fd76b3d4d32cb90049c599b41b448bf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 128,  428 => 127,  424 => 125,  418 => 124,  412 => 121,  407 => 120,  404 => 119,  400 => 118,  397 => 117,  395 => 116,  391 => 114,  387 => 112,  381 => 111,  375 => 109,  372 => 108,  368 => 107,  363 => 106,  360 => 105,  357 => 103,  353 => 101,  347 => 100,  341 => 98,  338 => 97,  334 => 96,  329 => 95,  327 => 94,  324 => 93,  320 => 91,  314 => 90,  308 => 88,  305 => 87,  301 => 86,  296 => 85,  293 => 84,  290 => 82,  287 => 81,  284 => 80,  281 => 79,  278 => 77,  275 => 76,  272 => 75,  269 => 74,  266 => 73,  263 => 71,  260 => 70,  257 => 69,  255 => 68,  251 => 66,  247 => 64,  241 => 63,  235 => 60,  230 => 59,  227 => 58,  223 => 57,  220 => 56,  218 => 55,  213 => 53,  210 => 52,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  190 => 47,  188 => 46,  185 => 45,  179 => 44,  176 => 43,  173 => 42,  170 => 41,  165 => 40,  163 => 39,  160 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  140 => 33,  138 => 32,  135 => 31,  129 => 30,  126 => 29,  123 => 28,  120 => 27,  115 => 26,  113 => 25,  110 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  90 => 19,  88 => 18,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock%}
{% block breadcrumb %}{% endblock %}
{% block content %}

    {% set has_left = false %}
    {% for block in blocks.left %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_left = true %}
        {% endif %}
    {% endfor %}

    {% set has_center = false %}
    {% for block in blocks.center %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_center = true %}
        {% endif %}
    {% endfor %}

    {% set has_right = false %}
    {% for block in blocks.right %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_right = true %}
        {% endif %}
    {% endfor %}

    {% set has_top = false %}
    {% for block in blocks.top %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_top = true %}
        {% endif %}
    {% endfor %}

    {% set has_bottom = false %}
    {% for block in blocks.bottom %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_bottom = true %}
        {% endif %}
    {% endfor %}

    {{ sonata_block_render_event('sonata.admin.dashboard.top', { 'admin_pool': sonata_admin.adminPool }) }}

    {% if has_top %}
        <div class=\"row\">
            {% for block in blocks.top %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    <div class=\"row\">
        {% set width_left = 4 %}
        {% set width_right = 4 %}
        {% set width_center = 4 %}

        {# if center block is not present we make left and right ones wider #}
        {% if not has_center %}
            {% set width_left = 6 %}
            {% set width_right = 6 %}
        {% endif %}

        {# if there is no right and left block present we make center one full width #}
        {% if not has_left and not has_right %}
            {% set width_center = 12 %}
        {% endif %}

        {# don't show left column if only center one is present #}
        {% if has_left or has_right %}
        <div class=\"col-md-{{ width_left }}\">
            {% for block in blocks.left %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}

        {% if has_center %}
            <div class=\"col-md-{{ width_center }}\">
                {% for block in blocks.center %}
                    {% if block.roles|length == 0 or is_granted(block.roles) %}
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    {% endif %}
                {% endfor %}
            </div>
        {% endif %}

        {# don't show right column if only center one is present #}
        {% if has_left or has_right %}
         <div class=\"col-md-{{ width_right }}\">
            {% for block in blocks.right %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}
    </div>

    {% if has_bottom %}
        <div class=\"row\">
            {% for block in blocks.bottom %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    {{ sonata_block_render_event('sonata.admin.dashboard.bottom', { 'admin_pool': sonata_admin.adminPool }) }}

{% endblock %}
", "@SonataAdmin/Core/dashboard.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/dashboard.html.twig");
    }
}
