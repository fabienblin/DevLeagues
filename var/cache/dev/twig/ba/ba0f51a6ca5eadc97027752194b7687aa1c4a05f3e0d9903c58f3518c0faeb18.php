<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_d0315dbf830ad408fef1229522df52a2c270149ae24cc643f4553e7f2ae6d111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c43cc5fa6c0f977b0ebfee76244f3bb077a3009b469b57de9f387f0003a4f9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43cc5fa6c0f977b0ebfee76244f3bb077a3009b469b57de9f387f0003a4f9c4->enter($__internal_c43cc5fa6c0f977b0ebfee76244f3bb077a3009b469b57de9f387f0003a4f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        $__internal_7204e6d4ca3ce4adf0615d527ccd9b62b5cd237fd988c6cebf11e1b1f0235157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7204e6d4ca3ce4adf0615d527ccd9b62b5cd237fd988c6cebf11e1b1f0235157->enter($__internal_7204e6d4ca3ce4adf0615d527ccd9b62b5cd237fd988c6cebf11e1b1f0235157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_c43cc5fa6c0f977b0ebfee76244f3bb077a3009b469b57de9f387f0003a4f9c4->leave($__internal_c43cc5fa6c0f977b0ebfee76244f3bb077a3009b469b57de9f387f0003a4f9c4_prof);

        
        $__internal_7204e6d4ca3ce4adf0615d527ccd9b62b5cd237fd988c6cebf11e1b1f0235157->leave($__internal_7204e6d4ca3ce4adf0615d527ccd9b62b5cd237fd988c6cebf11e1b1f0235157_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_1200d389f29d88dd4926abe5e82fb3471eb29cbde23225c892282365b61a9b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1200d389f29d88dd4926abe5e82fb3471eb29cbde23225c892282365b61a9b67->enter($__internal_1200d389f29d88dd4926abe5e82fb3471eb29cbde23225c892282365b61a9b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_82744e88c9e464dbe4acdbc637e44c8b18697a190878224b3ecb9cfe1760a7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82744e88c9e464dbe4acdbc637e44c8b18697a190878224b3ecb9cfe1760a7cd->enter($__internal_82744e88c9e464dbe4acdbc637e44c8b18697a190878224b3ecb9cfe1760a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_82744e88c9e464dbe4acdbc637e44c8b18697a190878224b3ecb9cfe1760a7cd->leave($__internal_82744e88c9e464dbe4acdbc637e44c8b18697a190878224b3ecb9cfe1760a7cd_prof);

        
        $__internal_1200d389f29d88dd4926abe5e82fb3471eb29cbde23225c892282365b61a9b67->leave($__internal_1200d389f29d88dd4926abe5e82fb3471eb29cbde23225c892282365b61a9b67_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "@SonataBlock/Block/block_base.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
