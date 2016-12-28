<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_801844f165bede1acd44e897b1014b0f817d10328544d8d02dc9038c895e4931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7acf9b966de7f5f0044af9a25a44cde31e76f94b2d13ac48cd732172f34c0e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acf9b966de7f5f0044af9a25a44cde31e76f94b2d13ac48cd732172f34c0e75->enter($__internal_7acf9b966de7f5f0044af9a25a44cde31e76f94b2d13ac48cd732172f34c0e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7acf9b966de7f5f0044af9a25a44cde31e76f94b2d13ac48cd732172f34c0e75->leave($__internal_7acf9b966de7f5f0044af9a25a44cde31e76f94b2d13ac48cd732172f34c0e75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
