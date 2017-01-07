<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_03a318ed063d6a9719edcd50bf485b73e37543e538ba8d9c9c85a45b76263284 extends Twig_Template
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
        $__internal_c3804a2ae702f517766424fc14c7d66990dfdfe4ec2dcd3ead528d90b0d22366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3804a2ae702f517766424fc14c7d66990dfdfe4ec2dcd3ead528d90b0d22366->enter($__internal_c3804a2ae702f517766424fc14c7d66990dfdfe4ec2dcd3ead528d90b0d22366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        $__internal_525c4f8ff08474a82652e601651fc72bcce3bcf80f3c8ecd899ab07d37371348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525c4f8ff08474a82652e601651fc72bcce3bcf80f3c8ecd899ab07d37371348->enter($__internal_525c4f8ff08474a82652e601651fc72bcce3bcf80f3c8ecd899ab07d37371348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_c3804a2ae702f517766424fc14c7d66990dfdfe4ec2dcd3ead528d90b0d22366->leave($__internal_c3804a2ae702f517766424fc14c7d66990dfdfe4ec2dcd3ead528d90b0d22366_prof);

        
        $__internal_525c4f8ff08474a82652e601651fc72bcce3bcf80f3c8ecd899ab07d37371348->leave($__internal_525c4f8ff08474a82652e601651fc72bcce3bcf80f3c8ecd899ab07d37371348_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_e78296ee83da1cc3c72d9d277028417e75303dd920e45a305c9eb2c54980ba52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78296ee83da1cc3c72d9d277028417e75303dd920e45a305c9eb2c54980ba52->enter($__internal_e78296ee83da1cc3c72d9d277028417e75303dd920e45a305c9eb2c54980ba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_906a870929b66ae4f9bb1e018c0edb18c688829a11b82db34c26ae49e3519b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906a870929b66ae4f9bb1e018c0edb18c688829a11b82db34c26ae49e3519b2b->enter($__internal_906a870929b66ae4f9bb1e018c0edb18c688829a11b82db34c26ae49e3519b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_906a870929b66ae4f9bb1e018c0edb18c688829a11b82db34c26ae49e3519b2b->leave($__internal_906a870929b66ae4f9bb1e018c0edb18c688829a11b82db34c26ae49e3519b2b_prof);

        
        $__internal_e78296ee83da1cc3c72d9d277028417e75303dd920e45a305c9eb2c54980ba52->leave($__internal_e78296ee83da1cc3c72d9d277028417e75303dd920e45a305c9eb2c54980ba52_prof);

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
", "@SonataBlock/Block/block_base.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
