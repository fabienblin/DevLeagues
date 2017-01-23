<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_b1343d62921f75e011dd4a137ca541887d0c352c5dbcb6779ccc6251af9f1458 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_601f188eb4eebdbd6fdb877edc5a3c30dca5701e4436b89336228bf5ba4816f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601f188eb4eebdbd6fdb877edc5a3c30dca5701e4436b89336228bf5ba4816f0->enter($__internal_601f188eb4eebdbd6fdb877edc5a3c30dca5701e4436b89336228bf5ba4816f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $__internal_506e038ec0bd4c2e5b0889196b8a1c9b868c42fe28db3a8164bb6bcf173a8fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506e038ec0bd4c2e5b0889196b8a1c9b868c42fe28db3a8164bb6bcf173a8fd4->enter($__internal_506e038ec0bd4c2e5b0889196b8a1c9b868c42fe28db3a8164bb6bcf173a8fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601f188eb4eebdbd6fdb877edc5a3c30dca5701e4436b89336228bf5ba4816f0->leave($__internal_601f188eb4eebdbd6fdb877edc5a3c30dca5701e4436b89336228bf5ba4816f0_prof);

        
        $__internal_506e038ec0bd4c2e5b0889196b8a1c9b868c42fe28db3a8164bb6bcf173a8fd4->leave($__internal_506e038ec0bd4c2e5b0889196b8a1c9b868c42fe28db3a8164bb6bcf173a8fd4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e25eb7f65262d79bbb15890e398b76bf5f8b0655dcb0dfbd7892705193c70d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25eb7f65262d79bbb15890e398b76bf5f8b0655dcb0dfbd7892705193c70d11->enter($__internal_e25eb7f65262d79bbb15890e398b76bf5f8b0655dcb0dfbd7892705193c70d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_2d40ca30d9cd683ff59900e3fd6d0ca0eabf1f83ca7c7e527a9244d9deef4bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d40ca30d9cd683ff59900e3fd6d0ca0eabf1f83ca7c7e527a9244d9deef4bdf->enter($__internal_2d40ca30d9cd683ff59900e3fd6d0ca0eabf1f83ca7c7e527a9244d9deef4bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_2d40ca30d9cd683ff59900e3fd6d0ca0eabf1f83ca7c7e527a9244d9deef4bdf->leave($__internal_2d40ca30d9cd683ff59900e3fd6d0ca0eabf1f83ca7c7e527a9244d9deef4bdf_prof);

        
        $__internal_e25eb7f65262d79bbb15890e398b76bf5f8b0655dcb0dfbd7892705193c70d11->leave($__internal_e25eb7f65262d79bbb15890e398b76bf5f8b0655dcb0dfbd7892705193c70d11_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_action.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
