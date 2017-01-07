<?php

/* @SonataAdmin/CRUD/base_show_macro.html.twig */
class __TwigTemplate_aac264efaa63cd1e4ba495ddcb7639bbefe271e32b104439a324001834868ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e759deff374386b328fa40712bf0959868432e8e45a6bf58485effecc017cb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e759deff374386b328fa40712bf0959868432e8e45a6bf58485effecc017cb4f->enter($__internal_e759deff374386b328fa40712bf0959868432e8e45a6bf58485effecc017cb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_macro.html.twig"));

        $__internal_6d8678ef20972e6e65cf0514767c05be1eecdb6abd004cb21a717ba3136e1f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8678ef20972e6e65cf0514767c05be1eecdb6abd004cb21a717ba3136e1f9a->enter($__internal_6d8678ef20972e6e65cf0514767c05be1eecdb6abd004cb21a717ba3136e1f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_e759deff374386b328fa40712bf0959868432e8e45a6bf58485effecc017cb4f->leave($__internal_e759deff374386b328fa40712bf0959868432e8e45a6bf58485effecc017cb4f_prof);

        
        $__internal_6d8678ef20972e6e65cf0514767c05be1eecdb6abd004cb21a717ba3136e1f9a->leave($__internal_6d8678ef20972e6e65cf0514767c05be1eecdb6abd004cb21a717ba3136e1f9a_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_9284b172575d3404b247175a801416a741058b636834cf4998bdc51ed0a6f31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9284b172575d3404b247175a801416a741058b636834cf4998bdc51ed0a6f31a->enter($__internal_9284b172575d3404b247175a801416a741058b636834cf4998bdc51ed0a6f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_d302f64aec5882e25a0e3620474e74b0ae810cb9eac33022487e45ea0cc5b93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d302f64aec5882e25a0e3620474e74b0ae810cb9eac33022487e45ea0cc5b93a->enter($__internal_d302f64aec5882e25a0e3620474e74b0ae810cb9eac33022487e45ea0cc5b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d302f64aec5882e25a0e3620474e74b0ae810cb9eac33022487e45ea0cc5b93a->leave($__internal_d302f64aec5882e25a0e3620474e74b0ae810cb9eac33022487e45ea0cc5b93a_prof);

        
        $__internal_9284b172575d3404b247175a801416a741058b636834cf4998bdc51ed0a6f31a->leave($__internal_9284b172575d3404b247175a801416a741058b636834cf4998bdc51ed0a6f31a_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_2d71d858175d22013ccf800bbf798f894e5d9394a352b3a06c327ad7ba17d8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d71d858175d22013ccf800bbf798f894e5d9394a352b3a06c327ad7ba17d8fb->enter($__internal_2d71d858175d22013ccf800bbf798f894e5d9394a352b3a06c327ad7ba17d8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_b59e5f59eb0557c4a5b6faa184201608f2937dc2a9b02a82bed3afd8eeb9775c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59e5f59eb0557c4a5b6faa184201608f2937dc2a9b02a82bed3afd8eeb9775c->enter($__internal_b59e5f59eb0557c4a5b6faa184201608f2937dc2a9b02a82bed3afd8eeb9775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_b59e5f59eb0557c4a5b6faa184201608f2937dc2a9b02a82bed3afd8eeb9775c->leave($__internal_b59e5f59eb0557c4a5b6faa184201608f2937dc2a9b02a82bed3afd8eeb9775c_prof);

        
        $__internal_2d71d858175d22013ccf800bbf798f894e5d9394a352b3a06c327ad7ba17d8fb->leave($__internal_2d71d858175d22013ccf800bbf798f894e5d9394a352b3a06c327ad7ba17d8fb_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_6e9a03bc27f3123aa7bd38fcbef22ea0b65fdd183ddc3deaf4c15f6ce08d210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9a03bc27f3123aa7bd38fcbef22ea0b65fdd183ddc3deaf4c15f6ce08d210c->enter($__internal_6e9a03bc27f3123aa7bd38fcbef22ea0b65fdd183ddc3deaf4c15f6ce08d210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_798005c1956475d3b3b96624c24a29422b60843cf3286734dcb42e52f8abb6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798005c1956475d3b3b96624c24a29422b60843cf3286734dcb42e52f8abb6d6->enter($__internal_798005c1956475d3b3b96624c24a29422b60843cf3286734dcb42e52f8abb6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_798005c1956475d3b3b96624c24a29422b60843cf3286734dcb42e52f8abb6d6->leave($__internal_798005c1956475d3b3b96624c24a29422b60843cf3286734dcb42e52f8abb6d6_prof);

        
        $__internal_6e9a03bc27f3123aa7bd38fcbef22ea0b65fdd183ddc3deaf4c15f6ce08d210c->leave($__internal_6e9a03bc27f3123aa7bd38fcbef22ea0b65fdd183ddc3deaf4c15f6ce08d210c_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fb1e43f3468234869f49c7a99f3ec12296dbc99adfc68bdbcfb43e6e610a9a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_fb1e43f3468234869f49c7a99f3ec12296dbc99adfc68bdbcfb43e6e610a9a7f->enter($__internal_fb1e43f3468234869f49c7a99f3ec12296dbc99adfc68bdbcfb43e6e610a9a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_24313c4a991a8464a431c0f0274e436813b87117b368a189b117e4bfe35d26cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_24313c4a991a8464a431c0f0274e436813b87117b368a189b117e4bfe35d26cc->enter($__internal_24313c4a991a8464a431c0f0274e436813b87117b368a189b117e4bfe35d26cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_24313c4a991a8464a431c0f0274e436813b87117b368a189b117e4bfe35d26cc->leave($__internal_24313c4a991a8464a431c0f0274e436813b87117b368a189b117e4bfe35d26cc_prof);

            
            $__internal_fb1e43f3468234869f49c7a99f3ec12296dbc99adfc68bdbcfb43e6e610a9a7f->leave($__internal_fb1e43f3468234869f49c7a99f3ec12296dbc99adfc68bdbcfb43e6e610a9a7f_prof);

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
        return "@SonataAdmin/CRUD/base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.name|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@SonataAdmin/CRUD/base_show_macro.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
