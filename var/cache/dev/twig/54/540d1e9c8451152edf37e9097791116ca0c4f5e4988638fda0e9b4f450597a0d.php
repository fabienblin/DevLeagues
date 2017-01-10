<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_cc3a6fb58c89b3ced889df8ead8a65dd4311e065d5984db73fa02bb39217a9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_571515d2d1b91f4cd64717275eadddf0aac0d0689e71f1f01be7d53015e540e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571515d2d1b91f4cd64717275eadddf0aac0d0689e71f1f01be7d53015e540e4->enter($__internal_571515d2d1b91f4cd64717275eadddf0aac0d0689e71f1f01be7d53015e540e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1d6c86b6ece5f2fcf4d09ebf0cdc125594bfd32254a92348298638b05222a410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6c86b6ece5f2fcf4d09ebf0cdc125594bfd32254a92348298638b05222a410->enter($__internal_1d6c86b6ece5f2fcf4d09ebf0cdc125594bfd32254a92348298638b05222a410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571515d2d1b91f4cd64717275eadddf0aac0d0689e71f1f01be7d53015e540e4->leave($__internal_571515d2d1b91f4cd64717275eadddf0aac0d0689e71f1f01be7d53015e540e4_prof);

        
        $__internal_1d6c86b6ece5f2fcf4d09ebf0cdc125594bfd32254a92348298638b05222a410->leave($__internal_1d6c86b6ece5f2fcf4d09ebf0cdc125594bfd32254a92348298638b05222a410_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9402864017463bf8e78920fe64a01e5dff5c59a8ab767ecee74fe7016812b127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9402864017463bf8e78920fe64a01e5dff5c59a8ab767ecee74fe7016812b127->enter($__internal_9402864017463bf8e78920fe64a01e5dff5c59a8ab767ecee74fe7016812b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6ffef7b15287ab075471630d1b3e050f79e3b9ed594806aff62b63c342693557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffef7b15287ab075471630d1b3e050f79e3b9ed594806aff62b63c342693557->enter($__internal_6ffef7b15287ab075471630d1b3e050f79e3b9ed594806aff62b63c342693557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "<div class=\"register-logo\">
    <a href=\"../../index2.html\"><b>DevLeagues</b></a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Register a new DevLeagues user</p>

    <form action=\"../../index.html\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
        Google+</a>
    </div>

    <a href=\"home.html\" class=\"text-center\">I already have an account</a> <!--TODO A CHANGER-->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src=\"../../plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"../../bootstrap/js/bootstrap.min.js\"></script>
<!-- iCheck -->
<script src=\"../../plugins/iCheck/icheck.min.js\"></script>
<script>
  \$(function () {
    \$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
";
        
        $__internal_6ffef7b15287ab075471630d1b3e050f79e3b9ed594806aff62b63c342693557->leave($__internal_6ffef7b15287ab075471630d1b3e050f79e3b9ed594806aff62b63c342693557_prof);

        
        $__internal_9402864017463bf8e78920fe64a01e5dff5c59a8ab767ecee74fe7016812b127->leave($__internal_9402864017463bf8e78920fe64a01e5dff5c59a8ab767ecee74fe7016812b127_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AvanzuAdminThemeBundle:layout:login-layout.html.twig\" %}

{% block page_content %}
<div class=\"register-logo\">
    <a href=\"../../index2.html\"><b>DevLeagues</b></a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Register a new DevLeagues user</p>

    <form action=\"../../index.html\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
        Google+</a>
    </div>

    <a href=\"home.html\" class=\"text-center\">I already have an account</a> <!--TODO A CHANGER-->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src=\"../../plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"../../bootstrap/js/bootstrap.min.js\"></script>
<!-- iCheck -->
<script src=\"../../plugins/iCheck/icheck.min.js\"></script>
<script>
  \$(function () {
    \$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
