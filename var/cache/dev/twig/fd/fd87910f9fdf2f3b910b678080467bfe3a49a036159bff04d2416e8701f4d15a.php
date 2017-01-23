<?php

/* AvanzuAdminThemeBundle:layout:macros.html.twig */
class __TwigTemplate_9e37ba8aac8fe2b00e1adf9d07a3186e0fee881fa4cb2e7884a41cc915407047 extends Twig_Template
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
        $__internal_8be3a71cf5d9a0ed51bcc67ebe7aff2b02828131427d39eb98dd30f0ce194cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be3a71cf5d9a0ed51bcc67ebe7aff2b02828131427d39eb98dd30f0ce194cdf->enter($__internal_8be3a71cf5d9a0ed51bcc67ebe7aff2b02828131427d39eb98dd30f0ce194cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

        $__internal_35792e53e66ff17947fe96341995b3d2f22a9115add4b81bbd7a2049b57c5e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35792e53e66ff17947fe96341995b3d2f22a9115add4b81bbd7a2049b57c5e62->enter($__internal_35792e53e66ff17947fe96341995b3d2f22a9115add4b81bbd7a2049b57c5e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

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
        
        $__internal_8be3a71cf5d9a0ed51bcc67ebe7aff2b02828131427d39eb98dd30f0ce194cdf->leave($__internal_8be3a71cf5d9a0ed51bcc67ebe7aff2b02828131427d39eb98dd30f0ce194cdf_prof);

        
        $__internal_35792e53e66ff17947fe96341995b3d2f22a9115add4b81bbd7a2049b57c5e62->leave($__internal_35792e53e66ff17947fe96341995b3d2f22a9115add4b81bbd7a2049b57c5e62_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_b274a1f2b1b52d74c5e8009f56c9833d59a53937e2fbfe2ec8b42e80937de24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b274a1f2b1b52d74c5e8009f56c9833d59a53937e2fbfe2ec8b42e80937de24d->enter($__internal_b274a1f2b1b52d74c5e8009f56c9833d59a53937e2fbfe2ec8b42e80937de24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        $__internal_2004170fa109250aa3ce32d4b265da5af7ccff9bfcf04f18ba341bea9f010381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2004170fa109250aa3ce32d4b265da5af7ccff9bfcf04f18ba341bea9f010381->enter($__internal_2004170fa109250aa3ce32d4b265da5af7ccff9bfcf04f18ba341bea9f010381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_2004170fa109250aa3ce32d4b265da5af7ccff9bfcf04f18ba341bea9f010381->leave($__internal_2004170fa109250aa3ce32d4b265da5af7ccff9bfcf04f18ba341bea9f010381_prof);

        
        $__internal_b274a1f2b1b52d74c5e8009f56c9833d59a53937e2fbfe2ec8b42e80937de24d->leave($__internal_b274a1f2b1b52d74c5e8009f56c9833d59a53937e2fbfe2ec8b42e80937de24d_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_1259d383dfef8bf7cde89a4b3f829129aa3d8010510cc55e537469eaf2329073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1259d383dfef8bf7cde89a4b3f829129aa3d8010510cc55e537469eaf2329073->enter($__internal_1259d383dfef8bf7cde89a4b3f829129aa3d8010510cc55e537469eaf2329073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        $__internal_8244302dbe12300882af5082404a3936c84cb64ae39f07aa22a91c3df71183c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8244302dbe12300882af5082404a3936c84cb64ae39f07aa22a91c3df71183c3->enter($__internal_8244302dbe12300882af5082404a3936c84cb64ae39f07aa22a91c3df71183c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_8244302dbe12300882af5082404a3936c84cb64ae39f07aa22a91c3df71183c3->leave($__internal_8244302dbe12300882af5082404a3936c84cb64ae39f07aa22a91c3df71183c3_prof);

        
        $__internal_1259d383dfef8bf7cde89a4b3f829129aa3d8010510cc55e537469eaf2329073->leave($__internal_1259d383dfef8bf7cde89a4b3f829129aa3d8010510cc55e537469eaf2329073_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_388d96a054dc18a44678046514b71868ae53c290c1371994565454f4393f97da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388d96a054dc18a44678046514b71868ae53c290c1371994565454f4393f97da->enter($__internal_388d96a054dc18a44678046514b71868ae53c290c1371994565454f4393f97da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        $__internal_72aa75ea58797f8cbab0d15f28063813a5e6b7b49a6556af64b1aabffaa1cda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aa75ea58797f8cbab0d15f28063813a5e6b7b49a6556af64b1aabffaa1cda9->enter($__internal_72aa75ea58797f8cbab0d15f28063813a5e6b7b49a6556af64b1aabffaa1cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

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
        
        $__internal_72aa75ea58797f8cbab0d15f28063813a5e6b7b49a6556af64b1aabffaa1cda9->leave($__internal_72aa75ea58797f8cbab0d15f28063813a5e6b7b49a6556af64b1aabffaa1cda9_prof);

        
        $__internal_388d96a054dc18a44678046514b71868ae53c290c1371994565454f4393f97da->leave($__internal_388d96a054dc18a44678046514b71868ae53c290c1371994565454f4393f97da_prof);

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
            $__internal_a4e38fa6978d999e1fc974621f130f32a0954c7aecf6a4fb4f886b00841cba92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a4e38fa6978d999e1fc974621f130f32a0954c7aecf6a4fb4f886b00841cba92->enter($__internal_a4e38fa6978d999e1fc974621f130f32a0954c7aecf6a4fb4f886b00841cba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            $__internal_ffc840afd98a0846ed9c2a086a1c3606aae2abbcb7a5cfc2afae072877edd758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ffc840afd98a0846ed9c2a086a1c3606aae2abbcb7a5cfc2afae072877edd758->enter($__internal_ffc840afd98a0846ed9c2a086a1c3606aae2abbcb7a5cfc2afae072877edd758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

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
            
            $__internal_ffc840afd98a0846ed9c2a086a1c3606aae2abbcb7a5cfc2afae072877edd758->leave($__internal_ffc840afd98a0846ed9c2a086a1c3606aae2abbcb7a5cfc2afae072877edd758_prof);

            
            $__internal_a4e38fa6978d999e1fc974621f130f32a0954c7aecf6a4fb4f886b00841cba92->leave($__internal_a4e38fa6978d999e1fc974621f130f32a0954c7aecf6a4fb4f886b00841cba92_prof);

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
            $__internal_a14374235731ca5f88e9b070676beadd1fdb34c7a69ebfba7d411e0581982192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a14374235731ca5f88e9b070676beadd1fdb34c7a69ebfba7d411e0581982192->enter($__internal_a14374235731ca5f88e9b070676beadd1fdb34c7a69ebfba7d411e0581982192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_c73daa5c4294192365324c40f1ca2881f413cb3fe9b2d497f04a8f9e595b43f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c73daa5c4294192365324c40f1ca2881f413cb3fe9b2d497f04a8f9e595b43f0->enter($__internal_c73daa5c4294192365324c40f1ca2881f413cb3fe9b2d497f04a8f9e595b43f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

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
            
            $__internal_c73daa5c4294192365324c40f1ca2881f413cb3fe9b2d497f04a8f9e595b43f0->leave($__internal_c73daa5c4294192365324c40f1ca2881f413cb3fe9b2d497f04a8f9e595b43f0_prof);

            
            $__internal_a14374235731ca5f88e9b070676beadd1fdb34c7a69ebfba7d411e0581982192->leave($__internal_a14374235731ca5f88e9b070676beadd1fdb34c7a69ebfba7d411e0581982192_prof);

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
            $__internal_416020c31199c6becfe983eb7e057e9964e431fa9e13d980bff6a48b80692246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_416020c31199c6becfe983eb7e057e9964e431fa9e13d980bff6a48b80692246->enter($__internal_416020c31199c6becfe983eb7e057e9964e431fa9e13d980bff6a48b80692246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_ecc4336c2947fc99861abc96a2b2b1b868bee974a1c509f96c545c69d46747d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ecc4336c2947fc99861abc96a2b2b1b868bee974a1c509f96c545c69d46747d5->enter($__internal_ecc4336c2947fc99861abc96a2b2b1b868bee974a1c509f96c545c69d46747d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

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
            
            $__internal_ecc4336c2947fc99861abc96a2b2b1b868bee974a1c509f96c545c69d46747d5->leave($__internal_ecc4336c2947fc99861abc96a2b2b1b868bee974a1c509f96c545c69d46747d5_prof);

            
            $__internal_416020c31199c6becfe983eb7e057e9964e431fa9e13d980bff6a48b80692246->leave($__internal_416020c31199c6becfe983eb7e057e9964e431fa9e13d980bff6a48b80692246_prof);

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
        return "AvanzuAdminThemeBundle:layout:macros.html.twig";
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
", "AvanzuAdminThemeBundle:layout:macros.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/layout/macros.html.twig");
    }
}
