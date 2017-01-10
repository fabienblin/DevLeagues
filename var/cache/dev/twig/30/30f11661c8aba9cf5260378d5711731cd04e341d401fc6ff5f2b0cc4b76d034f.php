<?php

/* knp_menu.html.twig */
class __TwigTemplate_40145ca9b7c65613eda05f9b8f220afcd4aa981aeab0dbd1b86c7477c7112da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13cba235313aedf3f3f5cb600e7ced075af7fdca7ad51f788092f01af8b264f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cba235313aedf3f3f5cb600e7ced075af7fdca7ad51f788092f01af8b264f2->enter($__internal_13cba235313aedf3f3f5cb600e7ced075af7fdca7ad51f788092f01af8b264f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_63dd01a950dd49489c10b2ad0d625b8d10b38c1f0aa0559d8ad652d39c230ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dd01a950dd49489c10b2ad0d625b8d10b38c1f0aa0559d8ad652d39c230ba5->enter($__internal_63dd01a950dd49489c10b2ad0d625b8d10b38c1f0aa0559d8ad652d39c230ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13cba235313aedf3f3f5cb600e7ced075af7fdca7ad51f788092f01af8b264f2->leave($__internal_13cba235313aedf3f3f5cb600e7ced075af7fdca7ad51f788092f01af8b264f2_prof);

        
        $__internal_63dd01a950dd49489c10b2ad0d625b8d10b38c1f0aa0559d8ad652d39c230ba5->leave($__internal_63dd01a950dd49489c10b2ad0d625b8d10b38c1f0aa0559d8ad652d39c230ba5_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_e1c63e1d026986846a28289e3e81c94bb05bdf1c4d953fb85c65a0d4fcba6694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c63e1d026986846a28289e3e81c94bb05bdf1c4d953fb85c65a0d4fcba6694->enter($__internal_e1c63e1d026986846a28289e3e81c94bb05bdf1c4d953fb85c65a0d4fcba6694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_64026cf13584467b434387b798dfc0293d5ad912f893cb1f2f878aa81cdc6af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64026cf13584467b434387b798dfc0293d5ad912f893cb1f2f878aa81cdc6af1->enter($__internal_64026cf13584467b434387b798dfc0293d5ad912f893cb1f2f878aa81cdc6af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64026cf13584467b434387b798dfc0293d5ad912f893cb1f2f878aa81cdc6af1->leave($__internal_64026cf13584467b434387b798dfc0293d5ad912f893cb1f2f878aa81cdc6af1_prof);

        
        $__internal_e1c63e1d026986846a28289e3e81c94bb05bdf1c4d953fb85c65a0d4fcba6694->leave($__internal_e1c63e1d026986846a28289e3e81c94bb05bdf1c4d953fb85c65a0d4fcba6694_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_194e3023904ed70f42ba2ad071bdce9f7a58dd93109d3a89e938ed803d17407c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194e3023904ed70f42ba2ad071bdce9f7a58dd93109d3a89e938ed803d17407c->enter($__internal_194e3023904ed70f42ba2ad071bdce9f7a58dd93109d3a89e938ed803d17407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_0d017fb129b2727d7376825c1643855f6d65b5533aee8dad61fca12d9cb9b0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d017fb129b2727d7376825c1643855f6d65b5533aee8dad61fca12d9cb9b0bd->enter($__internal_0d017fb129b2727d7376825c1643855f6d65b5533aee8dad61fca12d9cb9b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_0d017fb129b2727d7376825c1643855f6d65b5533aee8dad61fca12d9cb9b0bd->leave($__internal_0d017fb129b2727d7376825c1643855f6d65b5533aee8dad61fca12d9cb9b0bd_prof);

        
        $__internal_194e3023904ed70f42ba2ad071bdce9f7a58dd93109d3a89e938ed803d17407c->leave($__internal_194e3023904ed70f42ba2ad071bdce9f7a58dd93109d3a89e938ed803d17407c_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_15818203ef7f914d75a35594c84f4cc661f67b62a75a6aff20815bda909361c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15818203ef7f914d75a35594c84f4cc661f67b62a75a6aff20815bda909361c2->enter($__internal_15818203ef7f914d75a35594c84f4cc661f67b62a75a6aff20815bda909361c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_8ac963f6705d4071aefc81ff89a45d0f50a5fce3141fb2d613d6849e153a8cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac963f6705d4071aefc81ff89a45d0f50a5fce3141fb2d613d6849e153a8cce->enter($__internal_8ac963f6705d4071aefc81ff89a45d0f50a5fce3141fb2d613d6849e153a8cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_8ac963f6705d4071aefc81ff89a45d0f50a5fce3141fb2d613d6849e153a8cce->leave($__internal_8ac963f6705d4071aefc81ff89a45d0f50a5fce3141fb2d613d6849e153a8cce_prof);

        
        $__internal_15818203ef7f914d75a35594c84f4cc661f67b62a75a6aff20815bda909361c2->leave($__internal_15818203ef7f914d75a35594c84f4cc661f67b62a75a6aff20815bda909361c2_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_67c953a14f7eb06711be411e7e8e56f556336e456f3a6f1acf11f9c01ed6aa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c953a14f7eb06711be411e7e8e56f556336e456f3a6f1acf11f9c01ed6aa2d->enter($__internal_67c953a14f7eb06711be411e7e8e56f556336e456f3a6f1acf11f9c01ed6aa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_dc72b19082760f727a1fabeb56056ae8bbed7d58c292b3ce64e7352bbceeecdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc72b19082760f727a1fabeb56056ae8bbed7d58c292b3ce64e7352bbceeecdf->enter($__internal_dc72b19082760f727a1fabeb56056ae8bbed7d58c292b3ce64e7352bbceeecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_dc72b19082760f727a1fabeb56056ae8bbed7d58c292b3ce64e7352bbceeecdf->leave($__internal_dc72b19082760f727a1fabeb56056ae8bbed7d58c292b3ce64e7352bbceeecdf_prof);

        
        $__internal_67c953a14f7eb06711be411e7e8e56f556336e456f3a6f1acf11f9c01ed6aa2d->leave($__internal_67c953a14f7eb06711be411e7e8e56f556336e456f3a6f1acf11f9c01ed6aa2d_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_9105a04547749fac401a7d1c5691ad1e413eeaba2f67ec9f552abc6cabed4db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9105a04547749fac401a7d1c5691ad1e413eeaba2f67ec9f552abc6cabed4db4->enter($__internal_9105a04547749fac401a7d1c5691ad1e413eeaba2f67ec9f552abc6cabed4db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_9d384c002a1a4997c8365c5144808401cdffb06285455c8e7fc79eb47622033f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d384c002a1a4997c8365c5144808401cdffb06285455c8e7fc79eb47622033f->enter($__internal_9d384c002a1a4997c8365c5144808401cdffb06285455c8e7fc79eb47622033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_9d384c002a1a4997c8365c5144808401cdffb06285455c8e7fc79eb47622033f->leave($__internal_9d384c002a1a4997c8365c5144808401cdffb06285455c8e7fc79eb47622033f_prof);

        
        $__internal_9105a04547749fac401a7d1c5691ad1e413eeaba2f67ec9f552abc6cabed4db4->leave($__internal_9105a04547749fac401a7d1c5691ad1e413eeaba2f67ec9f552abc6cabed4db4_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ec5a33d2b9ae0c3a2a663cfd207f9c93b3bf5177ec091c38a49ddfc5bae130a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5a33d2b9ae0c3a2a663cfd207f9c93b3bf5177ec091c38a49ddfc5bae130a0->enter($__internal_ec5a33d2b9ae0c3a2a663cfd207f9c93b3bf5177ec091c38a49ddfc5bae130a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_11a9a4d664b6b5d6d1d86df4405bc790dbdb28c0b9a853ac8f46e10d8b23cb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a9a4d664b6b5d6d1d86df4405bc790dbdb28c0b9a853ac8f46e10d8b23cb85->enter($__internal_11a9a4d664b6b5d6d1d86df4405bc790dbdb28c0b9a853ac8f46e10d8b23cb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_11a9a4d664b6b5d6d1d86df4405bc790dbdb28c0b9a853ac8f46e10d8b23cb85->leave($__internal_11a9a4d664b6b5d6d1d86df4405bc790dbdb28c0b9a853ac8f46e10d8b23cb85_prof);

        
        $__internal_ec5a33d2b9ae0c3a2a663cfd207f9c93b3bf5177ec091c38a49ddfc5bae130a0->leave($__internal_ec5a33d2b9ae0c3a2a663cfd207f9c93b3bf5177ec091c38a49ddfc5bae130a0_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_25aba79f3e63f5e9e19a5b74913a59e6faaf51ef31f12ee3f92514fe216836cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25aba79f3e63f5e9e19a5b74913a59e6faaf51ef31f12ee3f92514fe216836cf->enter($__internal_25aba79f3e63f5e9e19a5b74913a59e6faaf51ef31f12ee3f92514fe216836cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_55f98716ff10198fd189ed865ece7ccb2f528e46f39de1f2f7c7a6402c3b8996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f98716ff10198fd189ed865ece7ccb2f528e46f39de1f2f7c7a6402c3b8996->enter($__internal_55f98716ff10198fd189ed865ece7ccb2f528e46f39de1f2f7c7a6402c3b8996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_55f98716ff10198fd189ed865ece7ccb2f528e46f39de1f2f7c7a6402c3b8996->leave($__internal_55f98716ff10198fd189ed865ece7ccb2f528e46f39de1f2f7c7a6402c3b8996_prof);

        
        $__internal_25aba79f3e63f5e9e19a5b74913a59e6faaf51ef31f12ee3f92514fe216836cf->leave($__internal_25aba79f3e63f5e9e19a5b74913a59e6faaf51ef31f12ee3f92514fe216836cf_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_822f8ca3478e1cc93124db3ccfd43a108fe1b4a1f4813fdec414579833560519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822f8ca3478e1cc93124db3ccfd43a108fe1b4a1f4813fdec414579833560519->enter($__internal_822f8ca3478e1cc93124db3ccfd43a108fe1b4a1f4813fdec414579833560519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_be357978f092bc638308d800bb1b551de4fd8ab2bddbc0c60d71061de0244b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be357978f092bc638308d800bb1b551de4fd8ab2bddbc0c60d71061de0244b06->enter($__internal_be357978f092bc638308d800bb1b551de4fd8ab2bddbc0c60d71061de0244b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_be357978f092bc638308d800bb1b551de4fd8ab2bddbc0c60d71061de0244b06->leave($__internal_be357978f092bc638308d800bb1b551de4fd8ab2bddbc0c60d71061de0244b06_prof);

        
        $__internal_822f8ca3478e1cc93124db3ccfd43a108fe1b4a1f4813fdec414579833560519->leave($__internal_822f8ca3478e1cc93124db3ccfd43a108fe1b4a1f4813fdec414579833560519_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bb721a2259949ed9ebf211d31f7e730fdc5d4896e8e7e6c87bf6838866fbc7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bb721a2259949ed9ebf211d31f7e730fdc5d4896e8e7e6c87bf6838866fbc7dc->enter($__internal_bb721a2259949ed9ebf211d31f7e730fdc5d4896e8e7e6c87bf6838866fbc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_65582f267cb2e6327244c086d2f9b00451777f3ddf8cd0ddf65f3bb0a3fa709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_65582f267cb2e6327244c086d2f9b00451777f3ddf8cd0ddf65f3bb0a3fa709c->enter($__internal_65582f267cb2e6327244c086d2f9b00451777f3ddf8cd0ddf65f3bb0a3fa709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_65582f267cb2e6327244c086d2f9b00451777f3ddf8cd0ddf65f3bb0a3fa709c->leave($__internal_65582f267cb2e6327244c086d2f9b00451777f3ddf8cd0ddf65f3bb0a3fa709c_prof);

            
            $__internal_bb721a2259949ed9ebf211d31f7e730fdc5d4896e8e7e6c87bf6838866fbc7dc->leave($__internal_bb721a2259949ed9ebf211d31f7e730fdc5d4896e8e7e6c87bf6838866fbc7dc_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
