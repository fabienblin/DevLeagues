<?php

/* @AvanzuAdminTheme/layout/macros.html.twig */
class __TwigTemplate_e9470a1d436656577e270ac8fc4613760c3df2e117a1d427bf02c0c387e1872a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'box_collapse' => array($this, 'block_box_collapse'),
            'box_remove' => array($this, 'block_box_remove'),
            'box_header_buttons' => array($this, 'block_box_header_buttons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cd6a759533082792b04d7eecee8ea228b97748eb0c65ba03928a5e12fb3d17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd6a759533082792b04d7eecee8ea228b97748eb0c65ba03928a5e12fb3d17f->enter($__internal_6cd6a759533082792b04d7eecee8ea228b97748eb0c65ba03928a5e12fb3d17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

        $__internal_e112367573132f70c1986746bab1e26e620ce472eff585090cab09a3b3e93378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e112367573132f70c1986746bab1e26e620ce472eff585090cab09a3b3e93378->enter($__internal_e112367573132f70c1986746bab1e26e620ce472eff585090cab09a3b3e93378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

        // line 1
        $this->displayBlock('box_collapse', $context, $blocks);
        // line 4
        $this->displayBlock('box_remove', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('box_header_buttons', $context, $blocks);
        // line 20
        echo "
";
        // line 28
        echo "

";
        // line 37
        echo "
";
        
        $__internal_6cd6a759533082792b04d7eecee8ea228b97748eb0c65ba03928a5e12fb3d17f->leave($__internal_6cd6a759533082792b04d7eecee8ea228b97748eb0c65ba03928a5e12fb3d17f_prof);

        
        $__internal_e112367573132f70c1986746bab1e26e620ce472eff585090cab09a3b3e93378->leave($__internal_e112367573132f70c1986746bab1e26e620ce472eff585090cab09a3b3e93378_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_e01e30d9ffe929232dcc00d661397e49cb289d374fff3d665e563b55dabb6a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01e30d9ffe929232dcc00d661397e49cb289d374fff3d665e563b55dabb6a05->enter($__internal_e01e30d9ffe929232dcc00d661397e49cb289d374fff3d665e563b55dabb6a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        $__internal_bc5aba38ce5cefa74d9b9bc1d0642670e50ea9a3ff474de61a5d467275eb4a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5aba38ce5cefa74d9b9bc1d0642670e50ea9a3ff474de61a5d467275eb4a8e->enter($__internal_bc5aba38ce5cefa74d9b9bc1d0642670e50ea9a3ff474de61a5d467275eb4a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_bc5aba38ce5cefa74d9b9bc1d0642670e50ea9a3ff474de61a5d467275eb4a8e->leave($__internal_bc5aba38ce5cefa74d9b9bc1d0642670e50ea9a3ff474de61a5d467275eb4a8e_prof);

        
        $__internal_e01e30d9ffe929232dcc00d661397e49cb289d374fff3d665e563b55dabb6a05->leave($__internal_e01e30d9ffe929232dcc00d661397e49cb289d374fff3d665e563b55dabb6a05_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_3aff890fbd6b45bb9319467108d5142751d26b45b3ecaebd27a41b7ff7520ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aff890fbd6b45bb9319467108d5142751d26b45b3ecaebd27a41b7ff7520ad3->enter($__internal_3aff890fbd6b45bb9319467108d5142751d26b45b3ecaebd27a41b7ff7520ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        $__internal_a96c4bcc09449c4076326dfa9e8c744998cb297aea380057b75a58a63c4f7695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96c4bcc09449c4076326dfa9e8c744998cb297aea380057b75a58a63c4f7695->enter($__internal_a96c4bcc09449c4076326dfa9e8c744998cb297aea380057b75a58a63c4f7695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_a96c4bcc09449c4076326dfa9e8c744998cb297aea380057b75a58a63c4f7695->leave($__internal_a96c4bcc09449c4076326dfa9e8c744998cb297aea380057b75a58a63c4f7695_prof);

        
        $__internal_3aff890fbd6b45bb9319467108d5142751d26b45b3ecaebd27a41b7ff7520ad3->leave($__internal_3aff890fbd6b45bb9319467108d5142751d26b45b3ecaebd27a41b7ff7520ad3_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_ec84a6556e8b9ec4335189f8509de70e9ce6d4ea982f6317173936fe5d207960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec84a6556e8b9ec4335189f8509de70e9ce6d4ea982f6317173936fe5d207960->enter($__internal_ec84a6556e8b9ec4335189f8509de70e9ce6d4ea982f6317173936fe5d207960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        $__internal_8d8978b0b2694c86694501e49c18f4de92e3ce9f26d10b9596c3e0cc3a9bd077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8978b0b2694c86694501e49c18f4de92e3ce9f26d10b9596c3e0cc3a9bd077->enter($__internal_8d8978b0b2694c86694501e49c18f4de92e3ce9f26d10b9596c3e0cc3a9bd077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        // line 9
        echo "    ";
        if ((($context["collapse"] ?? $this->getContext($context, "collapse")) || ($context["remove"] ?? $this->getContext($context, "remove")))) {
            // line 10
            echo "        <div class=\"box-tools pull-right\">
            ";
            // line 11
            if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
                // line 12
                echo "                ";
                $this->displayBlock("box_collapse", $context, $blocks);
                echo "
            ";
            }
            // line 14
            echo "            ";
            if (($context["remove"] ?? $this->getContext($context, "remove"))) {
                // line 15
                echo "                ";
                $this->displayBlock("box_remove", $context, $blocks);
                echo "
            ";
            }
            // line 17
            echo "        </div>
    ";
        }
        
        $__internal_8d8978b0b2694c86694501e49c18f4de92e3ce9f26d10b9596c3e0cc3a9bd077->leave($__internal_8d8978b0b2694c86694501e49c18f4de92e3ce9f26d10b9596c3e0cc3a9bd077_prof);

        
        $__internal_ec84a6556e8b9ec4335189f8509de70e9ce6d4ea982f6317173936fe5d207960->leave($__internal_ec84a6556e8b9ec4335189f8509de70e9ce6d4ea982f6317173936fe5d207960_prof);

    }

    // line 21
    public function getbox_header($__title__ = null, $__collapse__ = null, $__remove__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "collapse" => $__collapse__,
            "remove" => $__remove__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b7461d53b58453d38e87dd28b88985bc8e77a066b66416fecbfc933d61933753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b7461d53b58453d38e87dd28b88985bc8e77a066b66416fecbfc933d61933753->enter($__internal_b7461d53b58453d38e87dd28b88985bc8e77a066b66416fecbfc933d61933753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            $__internal_dcce10b04e4ddb502c52b56a3417c597acc76c00e5d115fc31b274b21d153dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dcce10b04e4ddb502c52b56a3417c597acc76c00e5d115fc31b274b21d153dc9->enter($__internal_dcce10b04e4ddb502c52b56a3417c597acc76c00e5d115fc31b274b21d153dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            // line 22
            echo "
    <div class=\"box-header\">
        <h3 class=\"box-title\">";
            // line 24
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
        ";
            // line 25
            $this->displayBlock("box_header_buttons", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_dcce10b04e4ddb502c52b56a3417c597acc76c00e5d115fc31b274b21d153dc9->leave($__internal_dcce10b04e4ddb502c52b56a3417c597acc76c00e5d115fc31b274b21d153dc9_prof);

            
            $__internal_b7461d53b58453d38e87dd28b88985bc8e77a066b66416fecbfc933d61933753->leave($__internal_b7461d53b58453d38e87dd28b88985bc8e77a066b66416fecbfc933d61933753_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getavatar($__image__ = null, $__alt__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0783c2e209b3d602cd4e5b7c24f470cba8b695aaff8b9a8660210c077622224a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0783c2e209b3d602cd4e5b7c24f470cba8b695aaff8b9a8660210c077622224a->enter($__internal_0783c2e209b3d602cd4e5b7c24f470cba8b695aaff8b9a8660210c077622224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_f827494c063af96f2566302c79fca56bd2d7755d04ddc9650c374ba513613060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f827494c063af96f2566302c79fca56bd2d7755d04ddc9650c374ba513613060->enter($__internal_f827494c063af96f2566302c79fca56bd2d7755d04ddc9650c374ba513613060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            // line 31
            echo "    ";
            if (($context["image"] ?? $this->getContext($context, "image"))) {
                // line 32
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["image"] ?? $this->getContext($context, "image"))), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 34
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/avanzuadmintheme/img/avatar.png"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            }
            
            $__internal_f827494c063af96f2566302c79fca56bd2d7755d04ddc9650c374ba513613060->leave($__internal_f827494c063af96f2566302c79fca56bd2d7755d04ddc9650c374ba513613060_prof);

            
            $__internal_0783c2e209b3d602cd4e5b7c24f470cba8b695aaff8b9a8660210c077622224a->leave($__internal_0783c2e209b3d602cd4e5b7c24f470cba8b695aaff8b9a8660210c077622224a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getmenu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c50b3e69eeb481be43d221c4f8b287e4e2ba5a05b66714bae3e2952d14d6db61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c50b3e69eeb481be43d221c4f8b287e4e2ba5a05b66714bae3e2952d14d6db61->enter($__internal_c50b3e69eeb481be43d221c4f8b287e4e2ba5a05b66714bae3e2952d14d6db61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_d825f9774caeef28b0c82c6ae6b5e77fe31053c25e20d85df029444c35c57091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d825f9774caeef28b0c82c6ae6b5e77fe31053c25e20d85df029444c35c57091->enter($__internal_d825f9774caeef28b0c82c6ae6b5e77fe31053c25e20d85df029444c35c57091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 39
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()) || $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()))) {
                // line 40
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "identifier", array()), "html", null, true);
                echo "\" class=\" ";
                echo (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) ? ("#") : (((twig_in_filter("/", $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()))) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "routeArgs", array())))))), "html", null, true);
                echo "\">
                ";
                // line 42
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array())) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                // line 43
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "</span>
                ";
                // line 44
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array())) {
                    // line 45
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
                ";
                }
                // line 47
                echo "                ";
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 48
                echo "            </a>

            ";
                // line 50
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) {
                    // line 51
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 53
                        echo "                        <li class=\"";
                        echo (($this->getAttribute($context["child"], "isActive", array())) ? ("active") : (""));
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "identifier", array()), "html", null, true);
                        echo "\">
                            <a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, ((twig_in_filter("/", $this->getAttribute($context["child"], "route", array()))) ? ($this->getAttribute($context["child"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["child"], "route", array()), $this->getAttribute($context["child"], "routeArgs", array())))), "html", null, true);
                        echo "\">
                                <i class=\"";
                        // line 55
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["child"], "icon", array()), "fa fa-circle-o")) : ("fa fa-circle-o")), "html", null, true);
                        echo "\"></i>
                                ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                </ul>
            ";
                }
                // line 62
                echo "        </li>
    ";
            } else {
                // line 64
                echo "        <li class=\"header\">
            ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "
            ";
                // line 66
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array())) {
                    // line 67
                    echo "                <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
            ";
                }
                // line 69
                echo "        </li>
    ";
            }
            
            $__internal_d825f9774caeef28b0c82c6ae6b5e77fe31053c25e20d85df029444c35c57091->leave($__internal_d825f9774caeef28b0c82c6ae6b5e77fe31053c25e20d85df029444c35c57091_prof);

            
            $__internal_c50b3e69eeb481be43d221c4f8b287e4e2ba5a05b66714bae3e2952d14d6db61->leave($__internal_c50b3e69eeb481be43d221c4f8b287e4e2ba5a05b66714bae3e2952d14d6db61_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/layout/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 69,  373 => 67,  371 => 66,  367 => 65,  364 => 64,  360 => 62,  356 => 60,  346 => 56,  342 => 55,  338 => 54,  331 => 53,  327 => 52,  324 => 51,  322 => 50,  318 => 48,  313 => 47,  305 => 45,  303 => 44,  298 => 43,  292 => 42,  288 => 41,  279 => 40,  276 => 39,  258 => 38,  229 => 34,  219 => 32,  216 => 31,  196 => 30,  172 => 25,  168 => 24,  164 => 22,  143 => 21,  131 => 17,  125 => 15,  122 => 14,  116 => 12,  114 => 11,  111 => 10,  108 => 9,  99 => 8,  86 => 5,  77 => 4,  64 => 2,  55 => 1,  44 => 37,  40 => 28,  37 => 20,  35 => 8,  32 => 7,  30 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block box_collapse %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
{% endblock %}
{% block box_remove %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
{% endblock %}

{% block box_header_buttons %}
    {% if collapse or remove %}
        <div class=\"box-tools pull-right\">
            {% if collapse %}
                {{ block('box_collapse') }}
            {% endif %}
            {% if remove %}
                {{ block('box_remove') }}
            {% endif %}
        </div>
    {% endif %}
{% endblock %}

{% macro box_header(title, collapse, remove, type) %}

    <div class=\"box-header\">
        <h3 class=\"box-title\">{{ title }}</h3>
        {{ block('box_header_buttons') }}
    </div>
{% endmacro %}


{% macro avatar(image, alt, class) %}
    {% if image %}
        <img src=\"{{ asset(image) }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% else %}
        <img src=\"{{ asset('bundles/avanzuadmintheme/img/avatar.png') }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% endif %}
{% endmacro %}

{% macro menu_item(item) %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\" class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                <span>{{ item.label }}</span>
                {% if item.badge %}
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                            <a href=\"{{ '/' in child.route ? child.route : path(child.route, child.routeArgs) }}\">
                                <i class=\"{{ child.icon|default('fa fa-circle-o') }}\"></i>
                                {{ child.label }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li class=\"header\">
            {{ item.label }}
            {% if item.badge %}
                <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
            {% endif %}
        </li>
    {% endif %}
{% endmacro %}
", "@AvanzuAdminTheme/layout/macros.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/macros.html.twig");
    }
}
