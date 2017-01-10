<?php

/* @AvanzuAdminTheme/layout/macros.html.twig */
class __TwigTemplate_f28fd55b7614b457484dbab4f1ecc0de7ff7ea9e104f4a23e49ed28466983f6c extends Twig_Template
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
        $__internal_eed6add0e42565d18678a0cff3d06d04b52a60ed2b0e58368e39d5c7bb652388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed6add0e42565d18678a0cff3d06d04b52a60ed2b0e58368e39d5c7bb652388->enter($__internal_eed6add0e42565d18678a0cff3d06d04b52a60ed2b0e58368e39d5c7bb652388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

        $__internal_5440381041e960dff3a681f3d23cf627a70b32d353e92d5f92b4715552350d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5440381041e960dff3a681f3d23cf627a70b32d353e92d5f92b4715552350d6e->enter($__internal_5440381041e960dff3a681f3d23cf627a70b32d353e92d5f92b4715552350d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

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
        
        $__internal_eed6add0e42565d18678a0cff3d06d04b52a60ed2b0e58368e39d5c7bb652388->leave($__internal_eed6add0e42565d18678a0cff3d06d04b52a60ed2b0e58368e39d5c7bb652388_prof);

        
        $__internal_5440381041e960dff3a681f3d23cf627a70b32d353e92d5f92b4715552350d6e->leave($__internal_5440381041e960dff3a681f3d23cf627a70b32d353e92d5f92b4715552350d6e_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_2388ba445ec7e5a52998953de510048ec4c1d75289d365aa6a2d13ae3bb694e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388ba445ec7e5a52998953de510048ec4c1d75289d365aa6a2d13ae3bb694e9->enter($__internal_2388ba445ec7e5a52998953de510048ec4c1d75289d365aa6a2d13ae3bb694e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        $__internal_4e1a81a526f22963d1e1945b53282a37cdc56babb6b3f9083081b36c4ec30780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1a81a526f22963d1e1945b53282a37cdc56babb6b3f9083081b36c4ec30780->enter($__internal_4e1a81a526f22963d1e1945b53282a37cdc56babb6b3f9083081b36c4ec30780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_4e1a81a526f22963d1e1945b53282a37cdc56babb6b3f9083081b36c4ec30780->leave($__internal_4e1a81a526f22963d1e1945b53282a37cdc56babb6b3f9083081b36c4ec30780_prof);

        
        $__internal_2388ba445ec7e5a52998953de510048ec4c1d75289d365aa6a2d13ae3bb694e9->leave($__internal_2388ba445ec7e5a52998953de510048ec4c1d75289d365aa6a2d13ae3bb694e9_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_c857371e5ee999fb4f10330aed5abb4115abeb77a885b1b8aeb569be9cc14a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c857371e5ee999fb4f10330aed5abb4115abeb77a885b1b8aeb569be9cc14a28->enter($__internal_c857371e5ee999fb4f10330aed5abb4115abeb77a885b1b8aeb569be9cc14a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        $__internal_6b731bea38b6fcac2e4985ff06c2e16e98e47efee9ea63a3b8a17f0d14c2d745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b731bea38b6fcac2e4985ff06c2e16e98e47efee9ea63a3b8a17f0d14c2d745->enter($__internal_6b731bea38b6fcac2e4985ff06c2e16e98e47efee9ea63a3b8a17f0d14c2d745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_6b731bea38b6fcac2e4985ff06c2e16e98e47efee9ea63a3b8a17f0d14c2d745->leave($__internal_6b731bea38b6fcac2e4985ff06c2e16e98e47efee9ea63a3b8a17f0d14c2d745_prof);

        
        $__internal_c857371e5ee999fb4f10330aed5abb4115abeb77a885b1b8aeb569be9cc14a28->leave($__internal_c857371e5ee999fb4f10330aed5abb4115abeb77a885b1b8aeb569be9cc14a28_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_8e61e0e7e1f14385ff8428d608db202b677fd9a4963c76baacc857a82ccb4435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e61e0e7e1f14385ff8428d608db202b677fd9a4963c76baacc857a82ccb4435->enter($__internal_8e61e0e7e1f14385ff8428d608db202b677fd9a4963c76baacc857a82ccb4435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        $__internal_d9d87d197f3d6cda040274c0ceae828c253821fbc9de0c4ecb87e0a15faa48ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d87d197f3d6cda040274c0ceae828c253821fbc9de0c4ecb87e0a15faa48ea->enter($__internal_d9d87d197f3d6cda040274c0ceae828c253821fbc9de0c4ecb87e0a15faa48ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

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
        
        $__internal_d9d87d197f3d6cda040274c0ceae828c253821fbc9de0c4ecb87e0a15faa48ea->leave($__internal_d9d87d197f3d6cda040274c0ceae828c253821fbc9de0c4ecb87e0a15faa48ea_prof);

        
        $__internal_8e61e0e7e1f14385ff8428d608db202b677fd9a4963c76baacc857a82ccb4435->leave($__internal_8e61e0e7e1f14385ff8428d608db202b677fd9a4963c76baacc857a82ccb4435_prof);

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
            $__internal_4150f817947d76b29bb0501924401a7209032e93c5e442d251ee9c81e7e1b590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4150f817947d76b29bb0501924401a7209032e93c5e442d251ee9c81e7e1b590->enter($__internal_4150f817947d76b29bb0501924401a7209032e93c5e442d251ee9c81e7e1b590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            $__internal_23b4055985b66f64904a8d4e28709dd62149bc0283ebcd5dd6993a5599971718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_23b4055985b66f64904a8d4e28709dd62149bc0283ebcd5dd6993a5599971718->enter($__internal_23b4055985b66f64904a8d4e28709dd62149bc0283ebcd5dd6993a5599971718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

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
            
            $__internal_23b4055985b66f64904a8d4e28709dd62149bc0283ebcd5dd6993a5599971718->leave($__internal_23b4055985b66f64904a8d4e28709dd62149bc0283ebcd5dd6993a5599971718_prof);

            
            $__internal_4150f817947d76b29bb0501924401a7209032e93c5e442d251ee9c81e7e1b590->leave($__internal_4150f817947d76b29bb0501924401a7209032e93c5e442d251ee9c81e7e1b590_prof);

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
            $__internal_0e4ef7f60db47610735705ed2b2197b5a53cfb8dac3c8b88c8a1816da4e00f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0e4ef7f60db47610735705ed2b2197b5a53cfb8dac3c8b88c8a1816da4e00f5c->enter($__internal_0e4ef7f60db47610735705ed2b2197b5a53cfb8dac3c8b88c8a1816da4e00f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_f402ebda8943e1751daaff681cfff0230702a13412b6f4b3d9d71062e58df817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f402ebda8943e1751daaff681cfff0230702a13412b6f4b3d9d71062e58df817->enter($__internal_f402ebda8943e1751daaff681cfff0230702a13412b6f4b3d9d71062e58df817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

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
            
            $__internal_f402ebda8943e1751daaff681cfff0230702a13412b6f4b3d9d71062e58df817->leave($__internal_f402ebda8943e1751daaff681cfff0230702a13412b6f4b3d9d71062e58df817_prof);

            
            $__internal_0e4ef7f60db47610735705ed2b2197b5a53cfb8dac3c8b88c8a1816da4e00f5c->leave($__internal_0e4ef7f60db47610735705ed2b2197b5a53cfb8dac3c8b88c8a1816da4e00f5c_prof);

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
            $__internal_863ee2cf077a4a002b770239d5f4d56123772c77d4da3636c1f559bb18c6484c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_863ee2cf077a4a002b770239d5f4d56123772c77d4da3636c1f559bb18c6484c->enter($__internal_863ee2cf077a4a002b770239d5f4d56123772c77d4da3636c1f559bb18c6484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_40d66af3ec7c782fd2ae979557fb07a009aac139775656b1da576615722d0233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_40d66af3ec7c782fd2ae979557fb07a009aac139775656b1da576615722d0233->enter($__internal_40d66af3ec7c782fd2ae979557fb07a009aac139775656b1da576615722d0233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

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
            
            $__internal_40d66af3ec7c782fd2ae979557fb07a009aac139775656b1da576615722d0233->leave($__internal_40d66af3ec7c782fd2ae979557fb07a009aac139775656b1da576615722d0233_prof);

            
            $__internal_863ee2cf077a4a002b770239d5f4d56123772c77d4da3636c1f559bb18c6484c->leave($__internal_863ee2cf077a4a002b770239d5f4d56123772c77d4da3636c1f559bb18c6484c_prof);

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
