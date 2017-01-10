<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_064d9681828194480dd2b022685ec362cb640cc98947a59bae3502547226fe6e extends Twig_Template
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
        $__internal_4da37bccb2c45192d6ba25a715228b20d590f15a12dfc8972c5ea7bea3e9a1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da37bccb2c45192d6ba25a715228b20d590f15a12dfc8972c5ea7bea3e9a1b3->enter($__internal_4da37bccb2c45192d6ba25a715228b20d590f15a12dfc8972c5ea7bea3e9a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3cd640b463c66b106cdd63822e29163f3293345eaafcc966321c1e20098a1fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd640b463c66b106cdd63822e29163f3293345eaafcc966321c1e20098a1fe1->enter($__internal_3cd640b463c66b106cdd63822e29163f3293345eaafcc966321c1e20098a1fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4da37bccb2c45192d6ba25a715228b20d590f15a12dfc8972c5ea7bea3e9a1b3->leave($__internal_4da37bccb2c45192d6ba25a715228b20d590f15a12dfc8972c5ea7bea3e9a1b3_prof);

        
        $__internal_3cd640b463c66b106cdd63822e29163f3293345eaafcc966321c1e20098a1fe1->leave($__internal_3cd640b463c66b106cdd63822e29163f3293345eaafcc966321c1e20098a1fe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
