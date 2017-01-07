<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b8be12a4449364b88cfe7b9d9e4caea9ff77e37a94a207bbf6e2457c58245931 extends Twig_Template
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
        $__internal_af2212a00c11aa87e1fb71d6e4a1a0c735fae1aca65f984a97f21712ad1cc079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2212a00c11aa87e1fb71d6e4a1a0c735fae1aca65f984a97f21712ad1cc079->enter($__internal_af2212a00c11aa87e1fb71d6e4a1a0c735fae1aca65f984a97f21712ad1cc079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2a30401ec2793fbf93eaec22ca5d1d82eb08652d187ecd0d1198376019d7ce08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a30401ec2793fbf93eaec22ca5d1d82eb08652d187ecd0d1198376019d7ce08->enter($__internal_2a30401ec2793fbf93eaec22ca5d1d82eb08652d187ecd0d1198376019d7ce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_af2212a00c11aa87e1fb71d6e4a1a0c735fae1aca65f984a97f21712ad1cc079->leave($__internal_af2212a00c11aa87e1fb71d6e4a1a0c735fae1aca65f984a97f21712ad1cc079_prof);

        
        $__internal_2a30401ec2793fbf93eaec22ca5d1d82eb08652d187ecd0d1198376019d7ce08->leave($__internal_2a30401ec2793fbf93eaec22ca5d1d82eb08652d187ecd0d1198376019d7ce08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
