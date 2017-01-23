<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_83555fddbad4a32bb279f8282b312ec9178af9fae196e0a7158f23cc3d049a96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_712fe7a23ad0b0e730e41652816149c8a4a4afe88cd4f4acbedd5108baca06e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712fe7a23ad0b0e730e41652816149c8a4a4afe88cd4f4acbedd5108baca06e9->enter($__internal_712fe7a23ad0b0e730e41652816149c8a4a4afe88cd4f4acbedd5108baca06e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $__internal_d80a698a4b2c56aaac6fc5bcbf7f5107de856d678c3e24de741301a22fbf0a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80a698a4b2c56aaac6fc5bcbf7f5107de856d678c3e24de741301a22fbf0a65->enter($__internal_d80a698a4b2c56aaac6fc5bcbf7f5107de856d678c3e24de741301a22fbf0a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712fe7a23ad0b0e730e41652816149c8a4a4afe88cd4f4acbedd5108baca06e9->leave($__internal_712fe7a23ad0b0e730e41652816149c8a4a4afe88cd4f4acbedd5108baca06e9_prof);

        
        $__internal_d80a698a4b2c56aaac6fc5bcbf7f5107de856d678c3e24de741301a22fbf0a65->leave($__internal_d80a698a4b2c56aaac6fc5bcbf7f5107de856d678c3e24de741301a22fbf0a65_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_cac274bea76a499d9d6cf2cdcd088d600f5b37960539a06e6c03b0a406abae1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac274bea76a499d9d6cf2cdcd088d600f5b37960539a06e6c03b0a406abae1c->enter($__internal_cac274bea76a499d9d6cf2cdcd088d600f5b37960539a06e6c03b0a406abae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_390edd11bd9b56b516ff12c0d57e6cdf8170a2cb6907d375b53053b5d18f0f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390edd11bd9b56b516ff12c0d57e6cdf8170a2cb6907d375b53053b5d18f0f51->enter($__internal_390edd11bd9b56b516ff12c0d57e6cdf8170a2cb6907d375b53053b5d18f0f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_390edd11bd9b56b516ff12c0d57e6cdf8170a2cb6907d375b53053b5d18f0f51->leave($__internal_390edd11bd9b56b516ff12c0d57e6cdf8170a2cb6907d375b53053b5d18f0f51_prof);

        
        $__internal_cac274bea76a499d9d6cf2cdcd088d600f5b37960539a06e6c03b0a406abae1c->leave($__internal_cac274bea76a499d9d6cf2cdcd088d600f5b37960539a06e6c03b0a406abae1c_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_b2c6b09f34fa98e4bd244d6e3db1d2fa716b93434b1ae03869995483252fbabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c6b09f34fa98e4bd244d6e3db1d2fa716b93434b1ae03869995483252fbabc->enter($__internal_b2c6b09f34fa98e4bd244d6e3db1d2fa716b93434b1ae03869995483252fbabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_15c399f6bed74c55fddba164b0c8cb43f33dd171d212459af8bcdd7c9182841f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c399f6bed74c55fddba164b0c8cb43f33dd171d212459af8bcdd7c9182841f->enter($__internal_15c399f6bed74c55fddba164b0c8cb43f33dd171d212459af8bcdd7c9182841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_15c399f6bed74c55fddba164b0c8cb43f33dd171d212459af8bcdd7c9182841f->leave($__internal_15c399f6bed74c55fddba164b0c8cb43f33dd171d212459af8bcdd7c9182841f_prof);

        
        $__internal_b2c6b09f34fa98e4bd244d6e3db1d2fa716b93434b1ae03869995483252fbabc->leave($__internal_b2c6b09f34fa98e4bd244d6e3db1d2fa716b93434b1ae03869995483252fbabc_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_c53278667082e7124c70562bf2ad9267adc4814ee39efbb993e4ab01181e5e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53278667082e7124c70562bf2ad9267adc4814ee39efbb993e4ab01181e5e49->enter($__internal_c53278667082e7124c70562bf2ad9267adc4814ee39efbb993e4ab01181e5e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_a6e6c915f9693782c4d559d6f150b83d2b47c55b74108d18dcc325fb25be8d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e6c915f9693782c4d559d6f150b83d2b47c55b74108d18dcc325fb25be8d40->enter($__internal_a6e6c915f9693782c4d559d6f150b83d2b47c55b74108d18dcc325fb25be8d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
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
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        // line 28
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_a6e6c915f9693782c4d559d6f150b83d2b47c55b74108d18dcc325fb25be8d40->leave($__internal_a6e6c915f9693782c4d559d6f150b83d2b47c55b74108d18dcc325fb25be8d40_prof);

        
        $__internal_c53278667082e7124c70562bf2ad9267adc4814ee39efbb993e4ab01181e5e49->leave($__internal_c53278667082e7124c70562bf2ad9267adc4814ee39efbb993e4ab01181e5e49_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_6b217970a9956596ccf1c01bf824f07a82f95560675db218dfb6971d37ecf43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b217970a9956596ccf1c01bf824f07a82f95560675db218dfb6971d37ecf43e->enter($__internal_6b217970a9956596ccf1c01bf824f07a82f95560675db218dfb6971d37ecf43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_3506a952d37d7a85714d1aac9c91e49b5524cefa2e0b75acdefd7724177ed43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3506a952d37d7a85714d1aac9c91e49b5524cefa2e0b75acdefd7724177ed43d->enter($__internal_3506a952d37d7a85714d1aac9c91e49b5524cefa2e0b75acdefd7724177ed43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_3506a952d37d7a85714d1aac9c91e49b5524cefa2e0b75acdefd7724177ed43d->leave($__internal_3506a952d37d7a85714d1aac9c91e49b5524cefa2e0b75acdefd7724177ed43d_prof);

        
        $__internal_6b217970a9956596ccf1c01bf824f07a82f95560675db218dfb6971d37ecf43e->leave($__internal_6b217970a9956596ccf1c01bf824f07a82f95560675db218dfb6971d37ecf43e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "@SonataBlock/Block/block_container.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
