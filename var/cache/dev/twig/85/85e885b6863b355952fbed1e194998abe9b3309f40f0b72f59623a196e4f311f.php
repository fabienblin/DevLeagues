<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_8e16fe17bcd13d58e88322e8acfa2d1e611da0789e1b4548cccf29f53bc86ed7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e602fa2ca754254edd73f47f62fc78ab2d4da691bc8742f71e422bdd1cd112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e602fa2ca754254edd73f47f62fc78ab2d4da691bc8742f71e422bdd1cd112->enter($__internal_e4e602fa2ca754254edd73f47f62fc78ab2d4da691bc8742f71e422bdd1cd112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $__internal_4e548260e21b16eee8064e4f11728b73452b23efafbe7d027ad9a512d9dc349f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e548260e21b16eee8064e4f11728b73452b23efafbe7d027ad9a512d9dc349f->enter($__internal_4e548260e21b16eee8064e4f11728b73452b23efafbe7d027ad9a512d9dc349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e602fa2ca754254edd73f47f62fc78ab2d4da691bc8742f71e422bdd1cd112->leave($__internal_e4e602fa2ca754254edd73f47f62fc78ab2d4da691bc8742f71e422bdd1cd112_prof);

        
        $__internal_4e548260e21b16eee8064e4f11728b73452b23efafbe7d027ad9a512d9dc349f->leave($__internal_4e548260e21b16eee8064e4f11728b73452b23efafbe7d027ad9a512d9dc349f_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_73b991f69aa0ef0752e7a9352234d8d71c316cb70dac3588cc0ba68ec4ddd169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b991f69aa0ef0752e7a9352234d8d71c316cb70dac3588cc0ba68ec4ddd169->enter($__internal_73b991f69aa0ef0752e7a9352234d8d71c316cb70dac3588cc0ba68ec4ddd169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_29371026f0cbb5ab5a0c51e9031e02599c832ccf0fe2e90bf8651ced86bbca4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29371026f0cbb5ab5a0c51e9031e02599c832ccf0fe2e90bf8651ced86bbca4a->enter($__internal_29371026f0cbb5ab5a0c51e9031e02599c832ccf0fe2e90bf8651ced86bbca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_29371026f0cbb5ab5a0c51e9031e02599c832ccf0fe2e90bf8651ced86bbca4a->leave($__internal_29371026f0cbb5ab5a0c51e9031e02599c832ccf0fe2e90bf8651ced86bbca4a_prof);

        
        $__internal_73b991f69aa0ef0752e7a9352234d8d71c316cb70dac3588cc0ba68ec4ddd169->leave($__internal_73b991f69aa0ef0752e7a9352234d8d71c316cb70dac3588cc0ba68ec4ddd169_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_a48c79523572f43753f76faac588b099a2436663d260f20c6736e9d6cd3eac04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48c79523572f43753f76faac588b099a2436663d260f20c6736e9d6cd3eac04->enter($__internal_a48c79523572f43753f76faac588b099a2436663d260f20c6736e9d6cd3eac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_313648cc14c48511ae829ac9003a025cccd5df5956501e13167c8a89f8aa8a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313648cc14c48511ae829ac9003a025cccd5df5956501e13167c8a89f8aa8a9b->enter($__internal_313648cc14c48511ae829ac9003a025cccd5df5956501e13167c8a89f8aa8a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_313648cc14c48511ae829ac9003a025cccd5df5956501e13167c8a89f8aa8a9b->leave($__internal_313648cc14c48511ae829ac9003a025cccd5df5956501e13167c8a89f8aa8a9b_prof);

        
        $__internal_a48c79523572f43753f76faac588b099a2436663d260f20c6736e9d6cd3eac04->leave($__internal_a48c79523572f43753f76faac588b099a2436663d260f20c6736e9d6cd3eac04_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_8a9992174fbd50221516ef05c3632670aefda5ad173d029c5220f6ba2ff11686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9992174fbd50221516ef05c3632670aefda5ad173d029c5220f6ba2ff11686->enter($__internal_8a9992174fbd50221516ef05c3632670aefda5ad173d029c5220f6ba2ff11686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_774edbc42f1ee77c32493b24e4d5521915630fe00e0474cbfc8836601e7e7641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774edbc42f1ee77c32493b24e4d5521915630fe00e0474cbfc8836601e7e7641->enter($__internal_774edbc42f1ee77c32493b24e4d5521915630fe00e0474cbfc8836601e7e7641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
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
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_774edbc42f1ee77c32493b24e4d5521915630fe00e0474cbfc8836601e7e7641->leave($__internal_774edbc42f1ee77c32493b24e4d5521915630fe00e0474cbfc8836601e7e7641_prof);

        
        $__internal_8a9992174fbd50221516ef05c3632670aefda5ad173d029c5220f6ba2ff11686->leave($__internal_8a9992174fbd50221516ef05c3632670aefda5ad173d029c5220f6ba2ff11686_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_dc547195dd181f7e718c744db9a40598d651581f4bfcd6064c9f32baef41e224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc547195dd181f7e718c744db9a40598d651581f4bfcd6064c9f32baef41e224->enter($__internal_dc547195dd181f7e718c744db9a40598d651581f4bfcd6064c9f32baef41e224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_82e5306704c8cb7222cc2f31880b280be393d3864dbe5bb0e1bec8d3f572176e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e5306704c8cb7222cc2f31880b280be393d3864dbe5bb0e1bec8d3f572176e->enter($__internal_82e5306704c8cb7222cc2f31880b280be393d3864dbe5bb0e1bec8d3f572176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_82e5306704c8cb7222cc2f31880b280be393d3864dbe5bb0e1bec8d3f572176e->leave($__internal_82e5306704c8cb7222cc2f31880b280be393d3864dbe5bb0e1bec8d3f572176e_prof);

        
        $__internal_dc547195dd181f7e718c744db9a40598d651581f4bfcd6064c9f32baef41e224->leave($__internal_dc547195dd181f7e718c744db9a40598d651581f4bfcd6064c9f32baef41e224_prof);

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
", "@SonataBlock/Block/block_container.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
