<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_960cb14bc2fe0d77f77b3a8d8696a5760d62d0d13b9fad8448d15ae7c8d1660a extends Twig_Template
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
        $__internal_10407612d0294fec7ea55ff7dc37bb17f900987647f3426191c0fe6ae7ad6250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10407612d0294fec7ea55ff7dc37bb17f900987647f3426191c0fe6ae7ad6250->enter($__internal_10407612d0294fec7ea55ff7dc37bb17f900987647f3426191c0fe6ae7ad6250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_46ba400de869294f6e72a4b6c64cd5e9cd92d7ebf62b14fe1d2dae4d0b1abd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ba400de869294f6e72a4b6c64cd5e9cd92d7ebf62b14fe1d2dae4d0b1abd19->enter($__internal_46ba400de869294f6e72a4b6c64cd5e9cd92d7ebf62b14fe1d2dae4d0b1abd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_10407612d0294fec7ea55ff7dc37bb17f900987647f3426191c0fe6ae7ad6250->leave($__internal_10407612d0294fec7ea55ff7dc37bb17f900987647f3426191c0fe6ae7ad6250_prof);

        
        $__internal_46ba400de869294f6e72a4b6c64cd5e9cd92d7ebf62b14fe1d2dae4d0b1abd19->leave($__internal_46ba400de869294f6e72a4b6c64cd5e9cd92d7ebf62b14fe1d2dae4d0b1abd19_prof);

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
", "@Framework/Form/form_rest.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
