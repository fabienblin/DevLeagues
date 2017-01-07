<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_ff59bd3e173ac99bc72be4470f4eaa617038801ef6b54cbf2fa4b7a3379cbbf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6501dc6eb2b49881de3a521fb02d9d143f26cf47a681330c08c6d5e55e8226d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6501dc6eb2b49881de3a521fb02d9d143f26cf47a681330c08c6d5e55e8226d->enter($__internal_b6501dc6eb2b49881de3a521fb02d9d143f26cf47a681330c08c6d5e55e8226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $__internal_ad03135df53762fd0905103719240a0ac37b188d368fddc8be492a99b16b4b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad03135df53762fd0905103719240a0ac37b188d368fddc8be492a99b16b4b20->enter($__internal_ad03135df53762fd0905103719240a0ac37b188d368fddc8be492a99b16b4b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6501dc6eb2b49881de3a521fb02d9d143f26cf47a681330c08c6d5e55e8226d->leave($__internal_b6501dc6eb2b49881de3a521fb02d9d143f26cf47a681330c08c6d5e55e8226d_prof);

        
        $__internal_ad03135df53762fd0905103719240a0ac37b188d368fddc8be492a99b16b4b20->leave($__internal_ad03135df53762fd0905103719240a0ac37b188d368fddc8be492a99b16b4b20_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_50934df026f6f4fd7f0d5912494bb61bfa71c8431e9a14c504a11e514eecd040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50934df026f6f4fd7f0d5912494bb61bfa71c8431e9a14c504a11e514eecd040->enter($__internal_50934df026f6f4fd7f0d5912494bb61bfa71c8431e9a14c504a11e514eecd040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_d1c6a70ed341b243b5f57bb6531c5df25b3a65ef518e8c11ac0ec93a9b4b170c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c6a70ed341b243b5f57bb6531c5df25b3a65ef518e8c11ac0ec93a9b4b170c->enter($__internal_d1c6a70ed341b243b5f57bb6531c5df25b3a65ef518e8c11ac0ec93a9b4b170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_d1c6a70ed341b243b5f57bb6531c5df25b3a65ef518e8c11ac0ec93a9b4b170c->leave($__internal_d1c6a70ed341b243b5f57bb6531c5df25b3a65ef518e8c11ac0ec93a9b4b170c_prof);

        
        $__internal_50934df026f6f4fd7f0d5912494bb61bfa71c8431e9a14c504a11e514eecd040->leave($__internal_50934df026f6f4fd7f0d5912494bb61bfa71c8431e9a14c504a11e514eecd040_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
